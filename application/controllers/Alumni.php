<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
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
		$data['get_all'] = $this->db->get('tb_data_alumni')->result_array();
		$data['role'] = $this->db->get_where('tb_login', ['role_id' => 1])->row_array();
		$this->load->view('template/header', $data);
		$this->load->view('admin/data_alumni', $data);
		$this->load->view('template/footer', $data);
	}

	public function kuis()
	{
		$data['role'] = $this->db->get_where('tb_login', ['role_id' => 1])->row_array();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('template/header', $data);
		$this->load->view('admin/kuis', $data);
		$this->load->view('template/footer');
	}

	public function kuis_data_pribadi()
	{
		$nama = $this->input->post('nama');
		$tahun_lulus = $this->input->post('tahun_lulus');
		$kompetensi = $this->input->post('kompetensi');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('nohp');
		$email = $this->input->post('email');
		$instagram = $this->input->post('instagram');

		$status = '';

		if ($bekerja = $this->input->post('bekerja')) {
			$status = $bekerja;
		} else if ($tidak_bekerja = $this->input->post('belum_bekerja')) {
			$status = $tidak_bekerja;
		} else if ($kuliah = $this->input->post('kuliah')) {
			$status = $kuliah;
		}

		$data = [
			'nama' => htmlspecialchars($nama),
			'tahun_lulus' => htmlspecialchars($tahun_lulus),
			'kompetensi' => htmlspecialchars($kompetensi),
			'alamat' => htmlspecialchars($alamat),
			'no_hp' => htmlspecialchars($no_hp),
			'email' => htmlspecialchars($email),
			'instagram' => htmlspecialchars($instagram),
			'status' => htmlspecialchars($status)
		];
		$insert = $this->db->insert('tb_kuisioner_data_pribadi', $data);
		if ($insert == true) {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-success alert-dismissable fade show" role="alert">
		                Congratulations, please next step
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('alumni/kuis');
		} else {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-danger alert-dismissable fade show" role="alert">
		                Sorry, Failed fill quest
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('alumni/kuis');
		}
	}

	public function kuis_data_kampus()
	{
		$nama_kampus = $this->input->post('nama_kampus');
		$alamat_kampus = $this->input->post('alamat_kampus');
		$fakultas = $this->input->post('fakultas');
		$jurusan = $this->input->post('jurusan');
		$jenjang = $this->input->post('jenjang');
		$tanggal_masuk = $this->input->post('tanggal_masuk');

		$masih_kuliah = '';

		if ($kuliah = $this->input->post('kuliah')) {
			$masih_kuliah = $kuliah;
		} else if ($tidak_kuliah = $this->input->post('sudah_lulus')) {
			$masih_kuliah = $tidak_kuliah;
		}

		$data = [
			'nama_kampus' => htmlspecialchars($nama_kampus),
			'alamat_kampus' => htmlspecialchars($alamat_kampus),
			'fakultas' => htmlspecialchars($fakultas),
			'jurusan' => htmlspecialchars($jurusan),
			'jenjang' => htmlspecialchars($jenjang),
			'tanggal_masuk' => htmlspecialchars($tanggal_masuk),
			'masih_kuliah' => htmlspecialchars($masih_kuliah)
		];
		// $json = json_encode($data);
		// echo $json;
		$insert = $this->db->insert('tb_kuisioner_data_kampus', $data);
		if ($insert == true) {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-success alert-dismissable fade show" role="alert">
		                Congratulations, please next step
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('alumni/kuis');
		} else {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-danger alert-dismissable fade show" role="alert">
		                Sorry, Failed fill quest
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('alumni/kuis');
		}
	}

	public function kuis_data_pekerjaan()
	{
		$nama_pt = $this->input->post('nama_pt');
		$alamat_pt = $this->input->post('alamat_pt');
		$no_telp_pt = $this->input->post('no_telp_pt');
		$sektor = $this->input->post('sektor');
		$tanggal_masuk = $this->input->post('tanggal_masuk');
		$penghasilan = $this->input->post('penghasilan');

		$status_kerja = '';

		if ($bekerja = $this->input->post('masih_bekerja')) {
			$status_kerja = $bekerja;
		} else if ($tidak_bekerja = $this->input->post('tidak_bekerja')) {
			$status_kerja = $tidak_bekerja;
		}

		$data = [
			'nama_pt' => htmlspecialchars($nama_pt),
			'alamat_pt' => htmlspecialchars($alamat_pt),
			'no_telp_pt' => htmlspecialchars($no_telp_pt),
			'sektor' => htmlspecialchars($sektor),
			'tanggal_masuk' => htmlspecialchars($tanggal_masuk),
			'penghasilan' => htmlspecialchars($penghasilan),
			'status_kerja' => htmlspecialchars($status_kerja)
		];

		// $json = json_encode($data);
		// echo $json;
		$insert = $this->db->insert('tb_kuisioner_data_pekerjaan', $data);
		if ($insert == true) {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-success alert-dismissable fade show" role="alert">
		                Congratulations, please next step
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('alumni/kuis');
		} else {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-danger alert-dismissable fade show" role="alert">
		                Sorry, Failed fill quest
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('alumni/kuis');
		}
	}

	public function kuis_data_usaha()
	{
		$nama_usaha = $this->input->post('nama_usaha');
		$alamat_usaha = $this->input->post('alamat_usaha');
		$no_telp_usaha = $this->input->post('no_telp_usaha');
		$bidang_usaha = $this->input->post('bidang_usaha');
		$sumber_modal = $this->input->post('sumber_modal');
		$jumlah_modal = $this->input->post('jumlah_modal');
		$jumlah_karyawan = $this->input->post('jumlah_karyawan');
		$tanggal_buka_usaha = $this->input->post('tanggal_buka_usaha');
		$penghasilan = $this->input->post('penghasilan_usaha');
		$masih_usaha = '';

		if ($usaha = $this->input->post('masih_usaha')) {
			$masih_usaha = $usaha;
		} else if ($tidak_usaha = $this->input->post('sudah_tidak_usaha')) {
			$masih_usaha = $tidak_usaha;
		}

		$data = [
			'nama_usaha' => htmlspecialchars($nama_usaha),
			'alamat_usaha' => htmlspecialchars($alamat_usaha),
			'no_telp_usaha' => htmlspecialchars($no_telp_usaha),
			'bidang_usaha' => htmlspecialchars($bidang_usaha),
			'sumber_modal' => htmlspecialchars($sumber_modal),
			'jumlah_modal' => htmlspecialchars($jumlah_modal),
			'jumlah_karyawan' => htmlspecialchars($jumlah_karyawan),
			'tanggal_buka_usaha' => htmlspecialchars($tanggal_buka_usaha),
			'penghasilan' => htmlspecialchars($penghasilan),
			'masih_usaha' => htmlspecialchars($masih_usaha)
		];
		// $json = json_encode($data);
		// echo $json;
		$insert = $this->db->insert('tb_kuisioner_data_usaha', $data);
		if ($insert == true) {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-success alert-dismissable fade show" role="alert">
		                Congratulations, please next step
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('alumni/kuis');
		} else {
			$this->session->set_flashdata(
				'massage',
				'<div class="alert alert-danger alert-dismissable fade show" role="alert">
		                Sorry, Failed fill quest
		                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>'
			);
			redirect('alumni/kuis');
		}
	}

	public function user_alumni()
	{
		$data['get_all'] = $this->db->get('tb_data_alumni')->result_array();

		$this->load->view('template/header');
		$this->load->view('admin/data_alumni', $data);
		$this->load->view('template/footer', $data);
	}

	public function kuisioner()
	{
		$data['role'] = $this->db->get_where('tb_login', ['role_id' => 2])->row_array();
		$data['username'] = $this->session->userdata('username');
		$this->load->view('template/header', $data);
		$this->load->view('users/kuisioner', $data);
		$this->load->view('template/footer');
	}
}
