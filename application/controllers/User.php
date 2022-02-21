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
        $this->load->model('M_database_model', 'dbm');

        $name = $this->session->userdata('nama');
        if (empty($name)) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['title'] = "Portal Alumni - Dashboard";

        $id_account = $this->session->userdata('id_account');
        $active = $this->session->userdata('is_active');

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');

        $data['get_data_active'] = $this->dbm->read_part('tb_registered', 'is_active', 1)->num_rows();
        $data['get_data_not_active'] = $this->dbm->read_part('tb_registered', 'is_active', 0)->num_rows();
        $data['get_data_all_data'] = $this->dbm->read_all('tb_registered')->num_rows();

        $data['get_data'] = $this->db->get_where('tb_registered', ['id_account' => $id_account])->result_array();
        $data['get_data_diri'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();
        $data['get_data_kampus'] = $this->dbm->read_part('tb_universitas', 'id_account', $id_account)->result_array();
        $data['get_data_pekerjaan'] = $this->dbm->read_part('tb_pekerjaan', 'id_account', $id_account)->result_array();
        $data['get_data'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/dashboard', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function isi_profile()
    {
        $data['title'] = "Portal Alumni - Profile";

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');
        $data['tanggal_lahir'] = $this->session->userdata('tanggal_lahir');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->db->get_where('tb_registered', ['id_account' => $id_account])->result_array();
        $data['get_data_diri'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();
        $data['get_data_diri_a'] = $this->db->get_where('tb_data_diri', ['id_account' => $id_account])->result_array();
        $data['get_data_kampus'] = $this->dbm->read_part('tb_universitas', 'id_account', $id_account)->row_array();
        $data['get_data_pekerjaan'] = $this->dbm->read_part('tb_pekerjaan', 'id_account', $id_account)->row_array();
        $data['get_data'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/isi_profile', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function profile()
    {
        $data['title'] = "Portal Alumni - Profile";

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');
        $data['tanggal_lahir'] = $this->session->userdata('tanggal_lahir');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->db->get_where('tb_registered', ['id_account' => $id_account])->result_array();
        $data['get_data_diri'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();
        $data['get_data_diri_a'] = $this->db->get_where('tb_data_diri', ['id_account' => $id_account])->row_array();
        $data['get_data_kampus'] = $this->dbm->read_part('tb_universitas', 'id_account', $id_account)->result_array();
        $data['get_data_pekerjaan'] = $this->dbm->read_part('tb_pekerjaan', 'id_account', $id_account)->result_array();
        $data['get_data'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/lihat_profile', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function bukululusan()
    {
        $data['title'] = "Portal Alumni - Buku Lulusan";

        $id_account = $this->session->userdata('id_account');

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');
        $data['get_data'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();
        $data['get_lowongan'] = $this->db->get('tb_lowongan_kerja')->result_array();
        $data['get_data_alumni_all'] = $this->dbm->read_by_year('tb_data_diri')->result_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/bukululusan', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function karir()
    {
        $data['title'] = "Portal Alumni - Karir";

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();
        $data['get_lowongan'] = $this->db->get('tb_lowongan_kerja')->result_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/karir', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function detilJobs($id_jobs)
    {
        $data['title'] = "Portal Alumni - Detils Jobs";

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->db->get_where('tb_registered', ['id_account' => $id_account])->result_array();

        $data['get_data_kampus'] = $this->db->get_where('tb_universitas', ['id_account' => $id_account])->result_array();
        $data['get_data_pekerjaan'] = $this->db->get_where('tb_pekerjaan', ['id_account' => $id_account])->result_array();
        $data['get_foto_profile'] = $this->db->get_where('tb_foto_profile', ['id_account' => $id_account])->row_array();

        $data['get_detil_lowongan'] = $this->db->get_where('tb_lowongan_kerja', ['id_jobs' => $id_jobs])->result_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/detiljobs', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function acara()
    {
        $data['title'] = "Portal Alumni - Donasi";

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();
        $data['get_lowongan'] = $this->db->get('tb_lowongan_kerja')->result_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/donasi', $data);
        $this->load->view('user/template/footer', $data);
    }

    public function donasi()
    {
        $data['title'] = "Portal Alumni - Donasi";

        $data['id_account'] = $this->session->userdata('id_account');
        $data['nama'] = $this->session->userdata('nama');

        $id_account = $this->session->userdata('id_account');
        $data['get_data'] = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();
        $data['get_lowongan'] = $this->db->get('tb_lowongan_kerja')->result_array();

        $this->load->view('user/template/header', $data);
        $this->load->view('user/donasi', $data);
        $this->load->view('user/template/footer', $data);
    }

    // Sistem
    public function save_data_diri()
    {
        $id_account = $this->session->userdata('id_account');

        $config['upload_path']          = './upload/image/profile';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 1000;
        $config['file_name']            = $id_account;
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
                redirect('user/isi_profile');
            }
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
                'alamat' => htmlspecialchars($this->input->post('alamat')),
                'foto' => $upload['file_name'],
            ];
            $result = $this->db->insert('tb_data_diri', $data);
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
                redirect('user/isi_profile');
                // var_dump($result);
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
                redirect('user/isi_profile');
                // var_dump($result);
            }
        }
    }

    public function save_data_kampus()
    {
        $data = [
            'id_account' => htmlspecialchars($this->input->post('id_account')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'nama_kampus' => htmlspecialchars($this->input->post('nama_kampus')),
            'nama_jurusan' => htmlspecialchars($this->input->post('nama_jurusan')),
            'jenjang' => htmlspecialchars($this->input->post('jenjang')),
            'tanggal_masuk' => htmlspecialchars($this->input->post('tanggal_masuk')),
            'tanggal_keluar' => htmlspecialchars($this->input->post('tanggal_keluar'))
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
            redirect('user/isi_profile');
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
            redirect('user/isi_profile');
        }
    }

    public function save_data_pekerjaan()
    {
        $data = [
            'id_account' => htmlspecialchars($this->input->post('id_account')),
            'nama' => htmlspecialchars($this->input->post('nama')),
            'nama_perusahaan' => htmlspecialchars($this->input->post('nama_perusahaan')),
            'bidang' => htmlspecialchars($this->input->post('bidang')),
            'jabatan' => htmlspecialchars($this->input->post('jabatan')),
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
            redirect('user/isi_profile');
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
            redirect('user/isi_profile');
        }
    }

    public function update_data_diri()
    {
    }

    public function update_foto()
    {
        $this->load->helper('file');

        $id_account = $this->session->userdata('id_account');
        $file_old = $this->dbm->read_part('tb_data_diri', 'id_account', $id_account)->row_array();

        $filename = './upload/image/profile/' . $file_old['foto'];
        if (unlink($filename)) {
            $config['upload_path']          = './upload/image/profile';
            $config['allowed_types']        = 'jpg|png';
            $config['max_size']             = 1000;
            $config['file_name']            = $id_account;
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
                    'foto' => $upload['file_name'],
                ];

                $result = $this->dbm->update('id_account', $id_account, 'tb_data_diri', $data);
                // var_dump($data);
                if ($result) {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-success" role="alert">
                            <strong>Sukses!</strong> berhasil update foto
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
                            <strong>Failed!</strong> gagal update foto
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>'
                    );
                    redirect('user/profile');
                }
            }
        }
    }
}
