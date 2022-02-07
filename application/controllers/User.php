<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('users_model', 'usermodel');

        $name = $this->session->userdata('nama');
        if (empty($name)) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('id_account');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->db->get_where('tb_registered', ['id_account' => $id_account])->result_array();

        $data['get_data_kampus'] = $this->db->get_where('tb_universitas', ['id_account' => $id_account])->result_array();
        $data['get_data_pekerjaan'] = $this->db->get_where('tb_pekerjaan', ['id_account' => $id_account])->result_array();
        $data['get_foto_profile'] = $this->db->get_where('tb_foto_profile', ['id_account' => $id_account])->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function profile()
    {
        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->db->get_where('tb_registered', ['id_account' => $id_account])->result_array();
        $data['get_data_diri'] = $this->db->get_where('tb_data_diri', ['id_account' =>$id_account])->row_array();
        $data['get_data_kampus'] = $this->db->get_where('tb_universitas', ['id_account' => $id_account])->result_array();
        $data['get_data_pekerjaan'] = $this->db->get_where('tb_pekerjaan', ['id_account' => $id_account])->result_array();
        $data['get_foto_profile'] = $this->db->get_where('tb_foto_profile', ['id_account' => $id_account])->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function bukululusan()
    {
        $id_account = $this->session->userdata('id_account');

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');
        $data['get_foto_profile'] = $this->db->get_where('tb_foto_profile', ['id_account' => $id_account])->row_array();
        // $data['id'] = random_int(100000, 999999);
        $data['get_lowongan'] = $this->db->get('tb_lowongan_kerja')->result_array();
        $data['get_data_alumni_all'] = $this->usermodel->join_data()->result_array();
        $this->load->view('user/template/header', $data);
        $this->load->view('user/bukululusan', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function karir()
    {
        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->db->get_where('tb_registered', ['id_account' => $id_account])->result_array();

        $data['get_data_kampus'] = $this->db->get_where('tb_universitas', ['id_account' => $id_account])->result_array();
        $data['get_data_pekerjaan'] = $this->db->get_where('tb_pekerjaan', ['id_account' => $id_account])->result_array();
        $data['get_foto_profile'] = $this->db->get_where('tb_foto_profile', ['id_account' => $id_account])->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/karir', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function detilJobs()
    {
        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->db->get_where('tb_registered', ['id_account' => $id_account])->result_array();

        $data['get_data_kampus'] = $this->db->get_where('tb_universitas', ['id_account' => $id_account])->result_array();
        $data['get_data_pekerjaan'] = $this->db->get_where('tb_pekerjaan', ['id_account' => $id_account])->result_array();
        $data['get_foto_profile'] = $this->db->get_where('tb_foto_profile', ['id_account' => $id_account])->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/detiljobs', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function save_data_diri()
    {
        $data = [
            'nisn' => $this->input->post('nisn'),
            'nama' => $this->input->post('nama'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama'),
            'provinsi' => $this->input->post('provinsi'),
            'kota' => $this->input->post('kota'),
            'kecamatan' => $this->input->post('kecamatan'),
            'telepon' => $this->input->post('telepon'),
            'alamat' => $this->input->post('alamat'),
        ];

        $insert = $this->usermodel->save_data_diri('tb_data_diri', $data);
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
            redirect('user/profile');
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
            redirect('user/profile');
        }
    }

    public function save_data_kampus()
    {
        $data = [
            'id_account' => $this->input->post('id_account'),
            'nama' => $this->input->post('nama'),
            'nama_kampus' => $this->input->post('nama_kampus'),
            'nama_jurusan' => $this->input->post('nama_jurusan'),
            'jenjang' => $this->input->post('jenjang'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'tanggal_keluar' => $this->input->post('tanggal_keluar')
        ];

        $insert = $this->usermodel->save_data('tb_universitas', $data);
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
            redirect('user/profile');
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
            redirect('user/profile');
        }
    }

    public function save_data_pekerjaan()
    {
        $data = [
            'id_account' => $this->input->post('id_account'),
            'nama' => $this->input->post('nama'),
            'nama_perusahaan' => $this->input->post('nama_perusahaan'),
            'bidang' => $this->input->post('bidang'),
            'jabatan' => $this->input->post('jabatan'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'),
            'tanggal_keluar' => $this->input->post('tanggal_keluar')
        ];

        $insert = $this->usermodel->save_data('tb_pekerjaan', $data);
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
            redirect('user/profile');
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
            redirect('user/profile');
        }
    }

    public function upload_foto()
    {
        // echo "upload disini";
        $id_account = $this->session->userdata('id_account');
        $nama = $this->session->userdata('nama');

        $config['upload_path']          = './upload/image/profile';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1000;
        // $config['encrypt_name'] 		= true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto_profile')) {
            if ($this->upload->data('file_size') > 100) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                        <strong>Failed!</strong> Ukuran foto tidak boleh lebih dari 1Mb dan format file harus jpg atau png
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('user/profile');
            }
        } else {
            $upload = $this->upload->data();
            $data = [
                'id_account' => $id_account,
                'nama' => $nama,
                'foto' => $upload['file_name']
            ];
            $result = $this->db->insert('tb_foto_profile', $data);
            // var_dump($data);
            if ($result) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success" role="alert">
                        <strong>Sukses!</strong> berhasil menambahkan data
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('user/profile');
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                        <strong>Failed!</strong> gagal upload foto
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
                redirect('user/profile');
            }
        }

        // if ($this->upload->do_upload('foto_profile')) {

        //     $uploadData = $this->upload->data();

        //     $data = [
        //         'id_akun' => $id_account,
        //         'nama' => $nama,
        //         'foto' => $uploadData['file_name']
        //     ];
        //     // $this->db->insert('tb_foto_profile', $data);
        //     var_dump($data);
        // }
        // // redirect('profile');
    }
}
