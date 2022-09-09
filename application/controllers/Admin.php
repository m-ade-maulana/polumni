<?php

defined('BASEPATH') or exit('No direct script access allowed');



class Admin extends CI_Controller

{

    // Construct function
    // Load model data and database
    // Save session userdata
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_alumni_model', 'data_alumni');
        $this->load->model('M_database_model', 'dbm');
        $name = $this->session->userdata('nama');
        if (empty($name)) {
            redirect('auth');
        }
    }

    public function message($type, $title)
    {
        $message_alert = "
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });

        Toast.fire({
            icon: '" . $type . "',
            title: '" . $title . "',
        });
        ";
        return $message_alert;
    }

    // Index function 
    // Index page admin
    public function index()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['id_account'] = $this->session->userdata('id_account');

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/template/footer', $data);
    }

    // Data alumni function
    // show all data alumni 
    public function dataAlumni()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['id_account'] = $this->session->userdata('id_account');

        $data['alumni'] = $this->data_alumni->get_alumni()->result_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/data_alumni', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function data_perusahaan()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['id_account'] = $this->session->userdata('id_account');

        $data['username'] = $this->session->userdata('username');
        $data['role'] = $this->db->get_where('tb_registered', ['role' => 1])->row_array();

        $data['get_all_perusahaan'] = $this->db->get('tb_perusahaan')->result_array();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/data_perusahaan', $data);
        $this->load->view('admin/template/footer', $data);
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
            'id_perusahaan' => rand(111111, 999999),
            'nama_perusahaan' => htmlspecialchars($this->input->post('nama_pt')),
            'alamat_perusahaan' => htmlspecialchars($this->input->post('alamat_pt')),
        ];

        $result = $this->db->insert('tb_perusahaan', $data);
        if ($result == true) {
            $this->session->set_flashdata('message', $this->message('success', 'Sukses tambah data'));
            redirect('admin/data_perusahaan');
        } else {
            $this->session->set_flashdata('message', $this->message('error', 'Gagal tambah data'));
            redirect('admin/data_perusahaan');
        }
    }

    // Karir page 
    // Show all carrier info
    public function formkarir()
    {
        $data['nama'] = $this->session->userdata('nama');
        $data['id_account'] = $this->session->userdata('id_account');

        // $data['id'] = random_int(100000, 999999);
        $data['get_lowongan'] = $this->db->get('tb_lowongan_kerja')->result_array();
        $data['get_perusahaan'] = $this->db->get('tb_perusahaan')->result_array();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/karir', $data);
        $this->load->view('admin/template/footer', $data);
    }

    // tambah karir
    // Function for add new carrier 
    public function tambahKarir()
    {
        $id = random_int(100000, 999999);
        $config['upload_path']          = './upload/image-job';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1000;
        $config['file_name']            = $id;
        // $config['encrypt_name'] 		= true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo_perusahaan')) {
            if ($this->upload->data('file_size') > 100) {
                $this->session->set_flashdata('message', $this->message('error', 'Ukuran gambar maksimal 100kb, jenis foto jpeg/png'));
                redirect('admin/formkarir');
            }
        } else {
            $upload = $this->upload->data();
            $data = [
                'id_jobs' => $id,
                'nama_perusahaan' => $this->input->post('nama_perusahaan'),
                'posisi' => $this->input->post('posisi'),
                'penempatan' => $this->input->post('penempatan'),
                'alamat' => $this->input->post('alamat'),
                'deskripsi' => $this->input->post('deskripsi'),
                'persyaratan' => $this->input->post('persyaratan'),
                'email' => $this->input->post('email'),
                'telepon' => $this->input->post('telepon'),
                'tanggal_publikasi' => date('Y-m-d'),
                'masa_berakhir' => $this->input->post('masa_berakhir'),
                'logo_perusahaan' => $upload['file_name']
            ];
            $result = $this->db->insert('tb_lowongan_kerja', $data);
            var_dump($data);
            // if ($result) {
            //     $this->session->set_flashdata('message', $this->message('success', 'Sukses tambah data'));
            //     redirect('admin/formkarir');
            // } else {
            //     $this->session->set_flashdata('message', $this->message('error', 'Gagal tambah data'));
            //     redirect('admin/formkarir');
            // }
        }
    }

    // Delete Jobs
    // Function for delete jobs expired
    public function deletejobs($id_jobs)
    {
        $logo = $this->db->get_where('tb_lowongan_kerja', ['id_jobs' => $id_jobs])->row_array();
        $this->db->where(['id_jobs' => $id_jobs]);
        $this->db->delete('tb_lowongan_kerja');
        unlink('upload/image-job/' . $logo['logo_perusahaan']);
    }

    // Activate 
    // Function for activate account
    public function activate()
    {
        $data['registered'] = $this->dbm->read_all('tb_registered')->result_array();
        $this->load->view('admin/template/header');
        $this->load->view('admin/aktif_akun', $data);
        $this->load->view('admin/template/footer');
    }
}
