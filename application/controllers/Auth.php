<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email', 'form_validation');
        $this->load->model('M_database_model', 'dbm');
        $this->load->model('M_email', 'email_message');
    }

    public function index()
    {
        $data['title'] = "Portal Alumni - Login";
        $this->load->view('login', $data);
    }

    public function registered()
    {
        $data['title'] = "Portal Alumni - Registered";
        $data['favicon'] = "logo.png";
        $token = "aktifkan";
        $data['token'] = sha1($token);

        $this->load->view('register', $data);
    }

    public function activation($token)
    {
        $data['title'] = "Portal Alumni - Aktivasi";
        $data['favicon'] = "logo.png";
        $data['get_token'] = $this->db->get_where('tb_registered', ['token' => $token])->row_array();
        $this->load->view('activasi', $data);
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Portal Alumni - Login";
            $this->load->view('login', $data);
        } else {
            $username = htmlspecialchars($this->input->post('username'));
            $password = htmlspecialchars($this->input->post('password'));

            $result = $this->db->get_where('tb_registered', ['username' => $username])->row_array();

            if ($result) {
                if ($result['username'] == $username) {
                    if (password_verify($password, $result['password'])) {
                        if ($result['is_active'] == 1) {
                            $data = [
                                'id_account' => $result['id_account'],
                                'nama' => $result['nama'],
                                'tanggal_lahir' => $result['tanggal_lahir'],
                                'email' => $result['email'],
                                'is_active' => $result['is_active']
                            ];

                            $this->session->set_userdata($data);
                            redirect('user', $data);
                        } else {
                            $this->session->set_flashdata(
                                'message',
                                '<div class="alert alert-danger" role="alert">
                            <strong>Failed !</strong> Akun anda belum aktif silahkan aktifkan dahulu
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                            );
                            redirect('auth');
                        }
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
                        redirect('auth');
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
                    redirect('auth');
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
                redirect('auth');
            }
        }
    }

    public function register()
    {
        // $this->load->model('M_validation_model', 'validation');
        // $this->validation->reg_valid();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tanggalLahir', 'TanggalLahir', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_registered.email]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|is_unique[tb_registered.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Portal Alumni - Registered";
            $data['favicon'] = "logo.png";

            $this->load->view('register', $data);
        } else {
            $string = 'aktifkan';
            $token = sha1($string);
            $data = [
                'id_account' => random_int(000000, 999999),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'tanggal_lahir' => $this->input->post('tanggalLahir'),
                'email' => htmlspecialchars($this->input->post('email')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash(htmlspecialchars($this->input->post('password')), PASSWORD_DEFAULT),
                'role' => '2',
                'is_active' => '0',
                'token' => $token
            ];

            $insert = $this->dbm->create('tb_registered', $data);
            if ($insert) {
                $sending = $this->email_message->message($this->input->post('email'), $token);

                if ($sending == TRUE) {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success" role="alert">
                        <strong>Sukses!</strong> silahkan periksa email anda untuk aktivasi
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                    );
                    redirect('auth');
                    // var_dump($sending);
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success" role="alert">
                        <strong>Sukses!</strong> jika email aktivasi tidak terkirim silahkan hubungi admin
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                    );
                    redirect('auth');
                    // var_dump($sending);
                }
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
    }

    public function aktif()
    {
        $email = htmlspecialchars($this->input->post('email'));

        $data = [
            'is_active' => 1
        ];

        $this->db->where('email', $email);
        $result = $this->db->update('tb_registered', $data);
        if ($result) {
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success" role="alert">
                        Selamat akun anda telah aktif silahkan masuk dengan akun anda
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
            );
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
