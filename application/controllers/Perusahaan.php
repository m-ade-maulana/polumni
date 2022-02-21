<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perusahaan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$username = $this->session->userdata('username');
		if (empty($username)) {
			redirect('auth');
		}
	}

	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$data['role'] = $this->db->get_where('tb_login', ['role_id' => 1])->row_array();

		$data['get_all_perusahaan'] = $this->db->get('tb_data_perusahaan');

		$this->load->view('template/header', $data);
		$this->load->view('admin/data_perusahaan', $data);
		$this->load->view('template/footer', $data);
	}

	public function api_city()
	{
		$data = file_get_contents("api/semua_kabupaten/all.json");
		$json = json_decode($data, TRUE);
		for ($i = 0; $i < count($json); $i++) {
			echo $json[$i]['nama'];
		}
	}

	public function tambah_pt()
	{
		$data = [
			'nama_pt' => htmlspecialchars($this->input->post('nama_pt')),
			'alamat_pt' => htmlspecialchars($this->input->post('alamat_pt')),
		];

		$result = $this->db->insert('tb_data_perusahaan', $data);
		if ($result == true) {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-success alert-dismissable fade show" role="alert">
                        Success Add Data
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
			);
			redirect('perusahaan');
		} else {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-danger alert-dismissable fade show" role="alert">
                        Failed Add Data
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
			);
			redirect('perusahaan');
		}
	}

	public function info_lowongan()
	{
		$data['username'] = $this->session->userdata('username');
		$data['role'] = $this->db->get_where('tb_login', ['role_id' => 1])->row_array();
		$data['data_lowongan'] = $this->db->get('tb_data_lowongan')->result_array();

		$this->load->view('template/header', $data);
		$this->load->view('admin/info_lowongan', $data);
		$this->load->view('template/footer');
	}

	public function tambah_pekerjaan()
	{
		$data['username'] = $this->session->userdata('username');
		$data['role'] = $this->db->get_where('tb_login', ['role_id' => 1])->row_array();
		$data['data_pt'] = $this->db->get('tb_data_perusahaan')->result_array();
		$this->load->view('template/header');
		$this->load->view('admin/tambah_lowongan', $data);
		$this->load->view('template/footer');
	}

	public function add_jobs()
	{
		$data = [
			'nama_pt' => htmlspecialchars($this->input->post('nama_pt')),
			'lokasi_pt' => htmlspecialchars($this->input->post('lokasi_pt')),
			'email_pt' => htmlspecialchars($this->input->post('email_pt')),
			'telepon_pt' => htmlspecialchars($this->input->post('telepon_pt')),
			'alamat_pt' => htmlspecialchars($this->input->post('alamat_pt')),
			'posisi' => htmlspecialchars($this->input->post('posisi')),
			'tanggal_tutup' => date('Y/m/d', strtotime($this->input->post('tanggal_tutup'))),
			'deskripsi' => htmlspecialchars($this->input->post('deskripsi'))
		];

		$result = $this->db->insert('tb_data_lowongan', $data);
		if ($result == true) {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-success alert-dismissable fade show" role="alert">
		                Success Add Data Jobs
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('perusahaan/info_lowongan');
		} else {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-danger alert-dismissable fade show" role="alert">
		                Failed Add Data Jobs
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('perusahaan/tambah_pekerjaan');
		}
	}
}
