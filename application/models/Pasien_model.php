<?php
 // write your name and student id here
class Pasien_model extends CI_model
{

	public function getAllPasien()
	{
		return $this->db->get('pasien')->result_array();

	}

	public function tambahDataPasien()
	{
		$data = [
			"id_pasien" => $this->input->post('id_pasien', true),
			"nama_pasien" => $this->input->post('nama_pasien', true),
			"keluhan" => $this->input->post('keluhan', true),
			"pekerjaan" => $this->input->post('pekerjaan', true),
			"alamat" => $this->input->post('alamat', true),
		];

		$this->db->insert('pasien', $data);

	}

	public function hapusDataPasien($id_pasien)
	{

		$this->db->where('id_pasien', $id_pasien);
		$this->db->delete('pasien');
	}

	public function getPasienById($id_pasien)
	{

		return $this->db->get_where('pasien',['id_pasien'=>$id_pasien])->row_array();
	}

	public function ubahDataPasien()
	{
		$data = [
#			"id_pasien" => $this->input->post('id_pasien', true),
			"nama_pasien" => $this->input->post('nama_pasien', true),
			"keluhan" => $this->input->post('keluhan', true),
			"pekerjaan" => $this->input->post('pekerjaan', true),
			"alamat" => $this->input->post('alamat', true),	
		];
		$this->db->where('id_pasien', $this->input->post('id_pasien'));
		$this->db->update('pasien', $data);
	}

	public function cariDataPasien()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		{
			$keyword = $this->input->post('keyword', true);
			$this->db->like('nama_pasien', $keyword);
			$this->db->or_like('id_pasien', $keyword);
			$this->db->or_like('keluhan', $keyword);
			$this->db->or_like('pekerjaan', $keyword);
			$this->db->or_like('alamat', $keyword);		
			return $this->db->get('pasien')->result_array();
		}

	}
}
