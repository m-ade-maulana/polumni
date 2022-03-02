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
        $this->load->model('M_validation_model', 'validation');
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

    public function biodata()
    {
        $data['title'] = "Biodata";

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');
        $data['tanggal_lahir'] = $this->session->userdata('tanggal_lahir');

        $this->load->view('biodata', $data);
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
                        $cek_data = $this->dbm->read_part('tb_data_diri', 'nama', $result['nama'])->num_rows();
                        if ($cek_data) {
                            if ($cek_data['is_active'] == 1) {
                                $data = [
                                    'id_account' => $result['id_account'],
                                    'nama' => $result['nama'],
                                    'tanggal_lahir' => $result['tanggal_lahir'],
                                    'telepon' => $result['telepon'],
                                    'email' => $result['email']
                                ];
                                $this->session->set_userdata($data);
                                redirect('user', $data);
                            } else {
                                $this->session->set_flashdata(
                                    'message',
                                    '<script>
                                        Swal.fire({
                                            Position: "top-end",
                                            icon: "error",
                                            title: "Sesi Validasi",
                                            text: "Data Anda Sedang Di Validasi",
                                            showConfirmButton: false,
                                            timer: 4000
                                        })
                                    </script>'
                                );
                                redirect('auth');
                            }
                        } else {
                            $this->session->set_flashdata(
                                'message',
                                '<script>
                                    Swal.fire({
                                        Position: "top-end",
                                        icon: "question",
                                        title: "Selamat Datang",
                                        text: "Silahkan Lengkapi Biodata Anda",
                                        showConfirmButton: false,
                                        timer: 2000
                                    })
                                </script>'
                            );
                            $data = [
                                'id_account' => $result['id_account'],
                                'nama' => $result['nama'],
                                'tanggal_lahir' => $result['tanggal_lahir'],
                                'telepon' => $result['telepon'],
                                'email' => $result['email']
                            ];
                            $this->session->set_userdata($data);
                            redirect('auth/biodata', $data);
                        }
                    } else {
                        $this->session->set_flashdata(
                            'message',
                            '<script>
                                Swal.fire({
                                    Position: "top-end",
                                    icon: "error",
                                    title: "Gagal",
                                    text: "Password Anda Salah, Silahkan Di Ulang",
                                    showConfirmButton: false,
                                    timer: 2000
                                })
                            </script>'
                        );
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<script>
                            Swal.fire({
                                Position: "top-end",
                                icon: "error",
                                title: "Gagal",
                                text: "Username Anda Salah, Silahkan Di Ulang",
                                showConfirmButton: false,
                                timer: 2000
                            })
                        </script>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<script>
                        Swal.fire({
                            Position: "top-end",
                            icon: "error",
                            title: "Gagal",
                            text: "Akun Anda Tidak Di Temukan",
                            showConfirmButton: false,
                            timer: 2000
                        })
                    </script>'
                );
                redirect('auth');
            }
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required', array(
            'required' => 'Nama Tidak boleh kosong'
        ));
        $this->form_validation->set_rules('tanggal_lahir', 'TanggalLahir', 'required', array(
            'required' => 'Tanggal lahir Tidak boleh kosong'
        ));
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|numeric|min_length[12]|max_length[13]', array(
            'required' => 'Tanggal lahir Tidak boleh kosong',
            'numeric' => 'Nomor telepon harus berupa angka',
            'min_length' => 'Minimal 12 angka',
            'max_length' => 'Maksimal 13 angka'
        ));
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[tb_registered.email]', array(
            'required' => 'Email Tidak boleh kosong',
            'valid_email' => 'Email tidak valid',
            'is_unique' => 'Email sudah terdaftar'
        ));
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[6]|is_unique[tb_registered.username]', array(
            'required' => 'Username Tidak boleh kosong',
            'min_length' => 'Minimal 6 karakter',
            'is_unique' => 'Username sudah terdaftar'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[12]', array(
            'required' => 'Tanggal lahir Tidak boleh kosong',
            'min_length' => 'Minimal 6 karakter',
            'max_length' => 'Maksimal 12 karakter'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = "Portal Alumni - Registered";
            $data['favicon'] = "logo.png";

            $this->load->view('register', $data);
        } else {
            $id_account = random_int(000000, 999999);
            $token = sha1($id_account);
            $data = [
                'id_account' => $id_account,
                'nama' => htmlspecialchars($this->input->post('nama')),
                'tanggal_lahir' => htmlspecialchars($this->input->post('tanggal_lahir')),
                'telepon' => htmlspecialchars($this->input->post('telepon')),
                'email' => htmlspecialchars($this->input->post('email')),
                'username' => htmlspecialchars($this->input->post('username')),
                'password' => password_hash(htmlspecialchars($this->input->post('password')), PASSWORD_DEFAULT),
                'role' => '2',
                'is_active' => '0',
                'token' => $token
            ];

            $insert = $this->dbm->create('tb_registered', $data);
            // var_dump($data);
            if ($insert) {
                $sending = $this->email_message->message(htmlspecialchars($this->input->post('email')), htmlspecialchars($this->input->post('username')), htmlspecialchars($this->input->post('password')), $token);

                if ($sending == TRUE) {
                    $this->session->set_flashdata(
                        'message',
                        '<script>
                            Swal.fire({
                                Position: "top-end",
                                icon: "success",
                                title: "Berhasil Disimpan",
                                text: "Sialhkan Login",
                                showConfirmButton: false,
                                timer: 2000
                            })
                        </script>'
                    );
                    redirect('auth');
                    // var_dump($sending);

                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<script>
                            Swal.fire({
                                Position: "top-end",
                                icon: "failed",
                                title: "Gagal Disimpan",
                                text: "Silahkan di ulang",
                                showConfirmButton: false,
                                timer: 2000
                            })
                        </script>'
                    );
                    redirect('auth');
                    // var_dump($sending);
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<script>
                        Swal.fire({
                            Position: "top-end",
                            icon: "failed",
                            title: "Gagal Disimpan",
                            text: "Silahkan di ulang",
                            showConfirmButton: false,
                            timer: 2000
                        })
                    </script>'
                );
                redirect('auth/registered');
            }
        }
    }

    public function input_biodata()
    {
        $id_account = htmlspecialchars($this->input->post('id_account'));
        // $id_account = $this->session->userdata('id_account');
        $config['upload_path']          = './upload/image/profile';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 500;
        $config['file_name']            = $id_account;
        // $config['encrypt_name'] 		= true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_profile')) {
            if ($this->upload->data('file_size') > 500) {
                $this->session->set_flashdata(
                    'message',
                    '<script>
                            Swal.fire({
                                Position: "top-end",
                                icon: "failed",
                                title: "Gagal",
                                text: "Maksimal gambar 500kb",
                                showConfirmButton: false,
                                timer: 2000
                            })
                        </script>'
                );
                redirect('auth/biodata');
            }
            $this->session->set_flashdata(
                'message',
                '<script>
                        Swal.fire({
                            Position: "top-end",
                            icon: "failed",
                            title: "Gagal",
                            text: "Foto wajib di isi",
                            showConfirmButton: false,
                            timer: 2000
                        })
                    </script>'
            );
            redirect('auth/biodata');
        } else {
            $upload = $this->upload->data();
            $data = [
                'id_account' => $id_account,
                'nisn' => htmlspecialchars($this->input->post('nisn')),
                'nama' => htmlspecialchars($this->input->post('nama')),
                'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
                'jenis_kelamin' => htmlspecialchars($this->input->post('jenis_kelamin')),
                'agama' => htmlspecialchars($this->input->post('agama')),
                'telepon' => htmlspecialchars($this->input->post('telepon')),
                'email' => htmlspecialchars($this->input->post('email')),
                'tahun_lulusan' => htmlspecialchars($this->input->post('tahun_lulus')),
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'foto' => $upload['file_name'],
            ];
            $result = $this->db->insert('tb_data_diri', $data);
            // var_dump($data);
            if ($result) {
                $this->session->set_flashdata(
                    'message',
                    '<script>
                            Swal.fire({
                                Position: "top-end",
                                icon: "success",
                                title: "Berhasil",
                                text: "Biodata sudah di lengkapi, silahkan tunggu 1x24 jam untuk sesi validasi",
                                showConfirmButton: false,
                                timer: 2000
                            })
                        </script>'
                );
                redirect('auth');
                // var_dump($result);
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<script>
                            Swal.fire({
                                Position: "top-end",
                                icon: "failed",
                                title: "Gagal",
                                text: "Gagal menyimpan data, silahkan di ulang",
                                showConfirmButton: false,
                                timer: 2000
                            })
                        </script>'
                );
                redirect('auth/biodata');
                // var_dump($result);
            }
        }
        // if ($this->form_validation->run() == FALSE) {
        //     $data['title'] = "Portal Alumni - Registered";
        //     $data['favicon'] = "logo.png";

        //     $this->load->view('auth/biodata', $data);
        // } else {

        // }
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
