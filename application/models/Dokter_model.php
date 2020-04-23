<?php
 // write your name and student id here
class Dokter_model extends CI_model
{

	public function getAllDokter()
	{
		return $this->db->get('dokter')->result_array();

	}

	public function tambahDataDokter()
	{
		$data = [
			"id_dokter" => $this->input->post('id_dokter', true),
			"nama_dokter" => $this->input->post('nama_dokter', true),
			"bidang" => $this->input->post('bidang', true),
			"lulusan" => $this->input->post('lulusan', true),
			"nomor_izinpraktik" => $this->input->post('nomor_izinpraktik', true),
			"lokasi_praktik" => $this->input->post('lokasi_praktik', true),
			"pengalaman_kerja" => $this->input->post('pengalaman_kerja', true),
		];

		$this->db->insert('dokter', $data);

	}

	public function hapusDataDokter($id_dokter)
	{

		$this->db->where('id_dokter', $id_dokter);
		$this->db->delete('dokter');
	}

	public function getDokterById($id_dokter)
	{

		return $this->db->get_where('dokter',['id_dokter'=>$id_dokter])->row_array();
	}

	public function ubahDataDokter()
	{
		$data = [
			"nama_dokter" => $this->input->post('nama_dokter', true),
			"bidang" => $this->input->post('bidang', true),
			"lulusan" => $this->input->post('lulusan', true),
			"nomor_izinpraktik" => $this->input->post('nomor_izinpraktik', true),
			"lokasi_praktik" => $this->input->post('lokasi_praktik', true),
			"pengalaman_kerja" => $this->input->post('pengalaman_kerja', true),		
		];
		//use query builder class to update data mahasiswa based on id
		$this->db->where('id_dokter', $this->input->post('id_dokter'));
		$this->db->update('dokter', $data);
	}

	public function cariDataDokter()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		{
			$keyword = $this->input->post('keyword', true);
			$this->db->like('nama_dokter', $keyword);
			$this->db->like('id_dokter', $keyword);
			$this->db->or_like('lulusan', $keyword);
			$this->db->or_like('nomor_izinpraktik', $keyword);
			$this->db->or_like('lokasi_praktik', $keyword);
			$this->db->or_like('pengalaman_kerja', $keyword);			
			return $this->db->get('dokter')->result_array();
		}

	}
}
