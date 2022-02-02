<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model', 'save');
    }
    public function index()
    {
        $data['title'] = "Portal Alumni - Login";
        $this->load->view('login', $data);
    }

    public function registered()
    {   
        $this->load->view('register');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->db->get_where('tb_registered', ['username' => $username])->row_array();

        if ($result) {
            if ($result['username'] == $username) {
                if ($result['password'] == $password) {
                    $data = [
                        'id_account' => $result['id_account'],
                        'nama' => $result['nama'],
                        'tanggal_lahir' => $result['tanggal_lahir'],
                        'email' => $result['email']
                    ];

                    $this->session->set_userdata($data);
                    redirect('user', $data);
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">
                            <strong>Failed !</strong> Password anda salah
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                        <strong>Failed !</strong> Username anda salah
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('login');
            }
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                        Data tidak ditemukan
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
            );
            redirect('login');
        }
    }

    public function register()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'tanggal_lahir' => $this->input->post('tanggalLahir'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'role' => '2'
        ];

        $insert = $this->save->save_data('tb_registered', $data);
        if ($insert) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                    <strong>Sukses!</strong> berhasil menambahkan data
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('auth');
        } else {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
                    <strong>Gagal!</strong> menambahkan data
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>'
            );
            redirect('auth/registered');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
