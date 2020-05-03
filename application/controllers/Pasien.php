<?php
 // write your name and student id here
class Pasien extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pasien_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Pasien';
		$data['pasien'] = $this->Pasien_model->getAllPasien();
		if ($this->input->post('keyword')) {
			$data['pasien'] = $this->Pasien_model->cariDataPasien();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('pasien/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Pasien';

		$this->form_validation->set_rules('nama_pasien','Nama','required');
		$this->form_validation->set_rules('id_pasien','ID','required|numeric');
		$this->form_validation->set_rules('keluhan','Keluhan','required');
		$this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('pasien/tambah');
			$this->load->view('templates/footer');
		}else{
			$this->Pasien_model->tambahDataPasien();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('pasien');
		}

	}

	public function hapus($id_pasien)
	{
		$this->Pasien_model->hapusDataPasien($id_pasien);
		$this->session->set_flashdata('flash','dihapus');
		redirect('pasien');

	}

	public function ubah($id_pasien)
	{
		$data['judul'] = 'Form Ubah Data Pasien';

		$data['pasien'] = $this->Pasien_model->getPasienById($id_pasien);

		$this->form_validation->set_rules('nama_pasien','Nama','required');
		$this->form_validation->set_rules('id_pasien','ID','required|numeric');
		$this->form_validation->set_rules('keluhan','Keluhan','required');
		$this->form_validation->set_rules('pekerjaan','Pekerjaan','required');
		$this->form_validation->set_rules('alamat','Alamat','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('pasien/ubah', $data);
			$this->load->view('templates/footer');
		}else{
			$this->Pasien_model->ubahDataPasien();
			$this->session->set_flashdata('flash','diubah');
			redirect('pasien');
		}

	}
}
