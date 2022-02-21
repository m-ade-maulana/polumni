x<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
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

		// $data['title'] = "Grafik Kelulusan Siswa";
		// $this->load->model('data_model', 'data_alumni');
		// $data['dataAlumni'] = $this->data_alumni->api_data_alumni();
		$data['role'] = $this->db->get_where('tb_login', ['role_id' => 1])->row_array();
		$data['username'] = $this->session->userdata('username');
		$data['siswalaki'] = $this->db->get_where('tb_data_alumni', ['jenis_kelamin' => 'L'])->num_rows();
		$data['siswaperempuan'] = $this->db->get_where('tb_data_alumni', ['jenis_kelamin' => 'P'])->num_rows();
		$data['siswalulus'] = $this->db->get_where('tb_data_alumni', ['status' => 'Lulus'])->num_rows();
		$this->load->view('template/header', $data);
		$this->load->view('admin/dashboard', $data);
		$this->load->view('template/footer');
	}

	public function user_dashboard()
	{
		$data['role'] = $this->db->get_where('tb_login', ['role_id' => 2])->row_array();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('template/header', $data);
		$this->load->view('users/dashboard', $data);
		$this->load->view('template/footer', $data);
	}
}
