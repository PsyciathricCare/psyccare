<?php
 // write your name and student id here
class Penyakit extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Penyakit_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Penyakit';
		$data['penyakit'] = $this->Penyakit_model->getAllPenyakit();
		if ($this->input->post('keyword')) {
			$data['penyakit'] = $this->Penyakit_model->cariDataPenyakit();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('penyakit/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Penyakit';

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('id','ID','required|numeric');
		$this->form_validation->set_rules('keterangan','Keterangan','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('penyakit/tambah');
			$this->load->view('templates/footer');
		}else{
			$this->Penyakit_model->tambahDataPenyakit();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('penyakit');
		}

	}

	public function hapus($id)
	{
		$this->Penyakit_model->hapusDataPenyakit($id);
		$this->session->set_flashdata('flash','dihapus');
		redirect('penyakit');

	}

	public function ubah($id)
	{
		$data['judul'] = 'Form Ubah Data Penyakit';

		$data['penyakit'] = $this->Penyakit_model->getPenyakitById($id);

		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('id','ID','required|numeric');
		$this->form_validation->set_rules('keterangan','Keterangan','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('penyakit/ubah', $data);
			$this->load->view('templates/footer');
		}else{
			$this->Penyakit_model->ubahDataPenyakit();
			$this->session->set_flashdata('flash','diubah');
			redirect('penyakit');
		}

	}
}
