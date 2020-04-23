<?php
 // write your name and student id here
class Obat extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Obat_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Obat';
		$data['obat'] = $this->Obat_model->getAllObat();
		if ($this->input->post('keyword')) {
			$data['obat'] = $this->Obat_model->cariDataObat();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('obat/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Obat';

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('id','ID','required|numeric');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('obat/tambah');
			$this->load->view('templates/footer');
		}else{
			$this->Obat_model->tambahDataObat();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('obat');
		}

	}

	public function hapus($id)
	{
		$this->Obat_model->hapusDataObat($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('obat');

	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Obat';

		$data['obat'] = $this->Obat_model->getObatById($id);

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('id','ID','required|numeric');
		$this->form_validation->set_rules('keterangan','Keterangan','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('obat/ubah', $data);
			$this->load->view('templates/footer');
		}else{
			$this->Obat_model->ubahDataObat();
			$this->session->set_flashdata('flash','diubah');
			redirect('obat');
		}

	}
}
