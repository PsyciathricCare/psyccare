<?php
 // write your name and student id here
class Konsultasi_model extends CI_model
{

	public function getAllKonsultasi()
	{
		return $this->db->get('konsultasi')->result_array();

	}

	public function tambahDataKonsultasi()
	{
		$data = [
			"id_konsultasi" => $this->input->post('id_konsultasi', true),
			"id_dokter" => $this->input->post('id_dokter', true),
			"id_pasien" => $this->input->post('id_pasien', true),
			"jadwal_konsultasi" => $this->input->post('jadwal_konsultasi', true),
			"waktu" => $this->input->post('waktu', true),
			"harga_jasa" => $this->input->post('harga_jasa', true),
		];

		$this->db->insert('konsultasi', $data);

	}

	public function hapusDataKonsultasi($id_konsultasi)
	{

		$this->db->where('id_konsultasi', $id_konsultasi);
		$this->db->delete('konsultasi');
	}

	public function getKonsultasiById($id_konsultasi)
	{

		return $this->db->get_where('konsultasi',['id_konsultasi'=>$id_konsultasi])->row_array();
	}

	public function ubahDataKonsultasi()
	{
		$data = [
#			"id_konsultasi" => $this->input->post('id_konsultasi', true),
			"id_dokter" => $this->input->post('id_dokter', true),
			"id_pasien" => $this->input->post('id_pasien', true),
			"jadwal_konsultasi" => $this->input->post('jadwal_konsultasi', true),
			"waktu" => $this->input->post('waktu', true),
			"harga_jasa" => $this->input->post('harga_jasa', true),
		];

		$this->db->where('id_konsultasi', $this->input->post('id_konsultasi'));
		$this->db->update('konsultasi', $data);
	}

	public function cariDataKonsultasi()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		{
			$keyword = $this->input->post('keyword', true);
			$this->db->like('id_Konsultasi', $keyword);
			$this->db->or_like('id_dokter', $keyword);
			$this->db->or_like('id_pasien', $keyword);
			$this->db->or_like('jadwal_konsultasi', $keyword);
			$this->db->or_like('waktu', $keyword);
			$this->db->or_like('harga_jasa', $keyword);			
			return $this->db->get('konsultasi')->result_array();
		}

	}
}
