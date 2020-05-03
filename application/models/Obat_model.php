<?php
 // write your name and student id here
class Obat_model extends CI_model
{

	public function getAllObat()
	{
		return $this->db->get('obat')->result_array();

	}

	public function tambahDataObat()
	{
		$data = [
			"id" => $this->input->post('id', true),
			"nama" => $this->input->post('nama', true),
			"keterangan" => $this->input->post('keterangan', true),
		];

		$this->db->insert('obat', $data);

	}

	public function hapusDataObat($id)
	{

		$this->db->where('id', $id);
		$this->db->delete('obat');
	}

	public function getObatById($id)
	{

		return $this->db->get_where('obat',['id'=>$id])->row_array();
	}

	public function ubahDataObat()
	{
		$data = [
#			"id_Obat" => $this->input->post('id_Obat', true),
			"nama" => $this->input->post('nama', true),
			"keterangan" => $this->input->post('keterangan', true),
		];
		$this->db->where('id', $this->input->post('id'));
		$this->db->update('obat', $data);
	}

	public function cariDataObat()
	{
		$keyword = $this->input->post('keyword', true);

		{
			$keyword = $this->input->post('keyword', true);
			$this->db->like('nama', $keyword);
			$this->db->or_like('id', $keyword);
			$this->db->or_like('keterangan', $keyword);
			return $this->db->get('obat')->result_array();
		}

	}
}
