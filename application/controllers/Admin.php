<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
        $this->load->model('Data_alumni_model', 'data_alumni');
        $this->load->model('M_database_model', 'dbm');
    }
    public function index()
    {
        $this->load->view('admin/template/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/template/footer');
    }

    public function dataAlumni()
    {
        $data['alumni'] = $this->data_alumni->get_alumni()->result_array();

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/data_alumni', $data);
        $this->load->view('admin/template/footer', $data);
    }

    public function formkarir()
    {
        // $data['id'] = random_int(100000, 999999);
        $data['get_lowongan'] = $this->db->get('tb_lowongan_kerja')->result_array();

        $this->load->view('admin/template/header');
        $this->load->view('admin/karir', $data);
        $this->load->view('admin/template/footer');
    }

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
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                        <strong>Failed!</strong> Ukuran foto tidak boleh lebih dari 1Mb dan format file harus jpg atau png
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>'
                );
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
                redirect('admin/formkarir');
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
                redirect('admin/formkarir');
            }
        }
    }

    public function deletejobs($id_jobs)
    {
        $logo = $this->db->get_where('tb_lowongan_kerja', ['id_jobs' => $id_jobs])->row_array();
        $this->db->where(['id_jobs' => $id_jobs]);
        $this->db->delete('tb_lowongan_kerja');
        unlink('upload/image-job/' . $logo['logo_perusahaan']);
    }

    public function activate()
    {
        $data['registered'] = $this->dbm->read_all('tb_registered')->result_array();

        $this->load->view('admin/template/header');
        $this->load->view('admin/aktif_akun', $data);
        $this->load->view('admin/template/footer');
    }
}
