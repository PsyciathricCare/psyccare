<?php
 // write your name and student id here
class Konsultasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Konsultasi_model');
		$this->load->library('form_validation');
	}


	public function index()
	{

		$data['judul'] = 'Daftar Konsultasi';
		$data['konsultasi'] = $this->Konsultasi_model->getAllKonsultasi();
		if ($this->input->post('keyword')) {
			$data['konsultasi'] = $this->Konsultasi_model->cariDataKonsultasi();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('konsultasi/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['judul'] = 'Form Tambah Data Konsultasi';

		$this->form_validation->set_rules('id_konsultasi','ID Kons','required');
		$this->form_validation->set_rules('id_dokter','ID Dokter','required');
		$this->form_validation->set_rules('id_pasien','ID Pasien','required');
		$this->form_validation->set_rules('jadwal_konsultasi','Jadwal','required');
		$this->form_validation->set_rules('waktu','Waktu','required');
		$this->form_validation->set_rules('harga_jasa','Harga','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('konsultasi/tambah');
			$this->load->view('templates/footer');
		}else{
			$this->Konsultasi_model->tambahDataKonsultasi();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('konsultasi');
		}

	}

	public function hapus($id_konsultasi)
	{
		$this->Konsultasi_model->hapusDataKonsultasi($id_konsultasi);
		$this->session->set_flashdata('flash','dihapus');
		redirect('konsultasi');

	}

	public function ubah($id_konsultasi)
	{
		$data['judul'] = 'Form Ubah Data Konsultasi';

		$data['konsultasi'] = $this->Konsultasi_model->getKonsultasiById($id_konsultasi);

		$this->form_validation->set_rules('id_Konsultasi','ID','required|numeric');
		$this->form_validation->set_rules('id_dokter','ID Dokter','required|numeric');
		$this->form_validation->set_rules('id_pasien','ID Pasien','required|numeric');
		$this->form_validation->set_rules('jadwal_konsultasi','Jadwal','required');
		$this->form_validation->set_rules('waktu','Waktu','required');
		$this->form_validation->set_rules('harga_jasa','Harga','required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('konsultasi/ubah', $data);
			$this->load->view('templates/footer');
		}else{
			$this->Konsultasi_model->ubahDataKonsultasi();
			$this->session->set_flashdata('flash','diubah');
			redirect('konsultasi');
		}

	}
}
