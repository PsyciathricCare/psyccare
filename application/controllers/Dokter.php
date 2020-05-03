<?php
 // write your name and student id here
class Dokter extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dokter_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Dokter';
		$data['dokter'] = $this->Dokter_model->getAllDokter();
		if ($this->input->post('keyword')) {
			$data['dokter'] = $this->Dokter_model->cariDataDokter();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('dokter/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Dokter';

		$this->form_validation->set_rules('nama_dokter','Nama','required');
		$this->form_validation->set_rules('id_dokter','ID','required|numeric');
		$this->form_validation->set_rules('bidang','Spesialis','required');
		$this->form_validation->set_rules('lulusan','Lulusan','required');
		$this->form_validation->set_rules('nomor_izinpraktik','Lulusan','required|numeric');
		$this->form_validation->set_rules('lokasi_praktik','Lokasi','required');
		$this->form_validation->set_rules('pengalaman_kerja','Pengalaman','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('dokter/tambah');
			$this->load->view('templates/footer');
		}else{
			$this->Dokter_model->tambahDataDokter();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('dokter');
		}

	}

	public function hapus($id_dokter)
	{
		$this->Dokter_model->hapusDataDokter($id_dokter);
		$this->session->set_flashdata('flash','dihapus');
		redirect('dokter');

	}

	public function ubah($id_dokter)
	{
		$data['judul'] = 'Form Ubah Data Dokter';

		$data['dokter'] = $this->Dokter_model->getDokterById($id_dokter);


		$this->form_validation->set_rules('nama_dokter','Nama','required');
		$this->form_validation->set_rules('id_dokter','ID','required|numeric');
		$this->form_validation->set_rules('bidang','Spesialis','required');
		$this->form_validation->set_rules('lulusan','Lulusan','required');
		$this->form_validation->set_rules('nomor_izinpraktik','Lulusan','required|numeric');
		$this->form_validation->set_rules('lokasi_praktik','Lokasi','required');
		$this->form_validation->set_rules('pengalaman_kerja','Pengalaman','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('dokter/ubah', $data);
			$this->load->view('templates/footer');
		}else{
			$this->Dokter_model->ubahDataDokter();
			$this->session->set_flashdata('flash','diubah');
			redirect('dokter');
		}

	}
}
