<?php
 // write your name and student id here
class Penyakit_model extends CI_model
{

	public function getAllPenyakit()
	{
		return $this->db->get('penyakit')->result_array();

	}

	public function tambahDataPenyakit()
	{
		$data = [
			"id" => $this->input->post('id', true),
			"nama" => $this->input->post('nama', true),
			"keterangan" => $this->input->post('keterangan', true),
		];

		$this->db->insert('penyakit', $data);

	}

	public function hapusDataPenyakit($id)
	{

		$this->db->where('id', $id);
		$this->db->delete('penyakit');
	}

	public function getPenyakitById($id)
	{

		return $this->db->get_where('penyakit',['id'=>$id])->row_array();
	}

	public function ubahDataPenyakit()
	{
		$data = [
#			"id_Penyakit" => $this->input->post('id_Penyakit', true),
			"nama" => $this->input->post('nama', true),
			"keterangan" => $this->input->post('keterangan', true),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('penyakit', $data);
	}

	public function cariDataPenyakit()
	{
		$keyword = $this->input->post('keyword', true);
		//use query builder class to search data mahasiswa based on keyword "nama" or "jurusan" or "nim" or "email"
		{
			$keyword = $this->input->post('keyword', true);
			$this->db->like('nama', $keyword);
			$this->db->or_like('id', $keyword);
			$this->db->or_like('keterangan', $keyword);
			return $this->db->get('penyakit')->result_array();
		}

	}
}
