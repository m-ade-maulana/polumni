<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
	public function getAll()
	{
		$this->db->select('*');
		$this->db->from('tb_data_alumni');
		return $this->db->get();
	}

	public function api_city()
	{
		$data = file_get_contents("api/semua_kabupaten/all.json");
		$json = json_decode($data, TRUE);
		echo $json;
	}

	public function api_data_alumni()
	{
		$this->db->select('tanggal_lulus', 'tahun');
		$this->db->count_all('tb_data_alumni');
		$this->db->from('tb_data_alumni');
		$query = "SELECT tanggal_lulus AS tahun, COUNT(*) AS total_siswa FROM tb_data_alumni GROUP BY tanggal_lulus";
		$result = $this->db->query($query)->result_array();
		// echo json_encode($data, true);
		if (count($result) > 0) {
			foreach ($result as $r) {
				$data[] = $r;
			}
			echo $data;
		}
	}
}


/* End of file Data_model.php and path /application/models/data_model.php */
