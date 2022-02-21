<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_validation_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function reg_valid()
    {
        $config = [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required',
                'error' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ],
            [
                'field' => 'tanggal_lahir',
                'label' => 'Tanggal Lahir',
                'rules' => 'required',
                'error' => [
                    'required' => 'Tanggal lahir tidak boleh kosong'
                ]
            ],
            [
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'required|trim|valid_email',
                'error' => [
                    'required' => 'Nama tidak boleh kosong',
                    'valid_email' => 'Email tidak valid'
                ]
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|trim|is_unique[tb_registered.username]',
                'error' => [
                    'required' => 'Nama tidak boleh kosong',
                    'is_unique' => 'Username sudah ada, silahkan isi dengan username berbeda'
                ]
            ],
            [
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|min_length[6]',
                'error' => [
                    'required' => 'Nama tidak boleh kosong',
                    'is_unique' => 'Username sudah ada, silahkan isi dengan username berbeda'
                ]
            ]
        ];

        $this->form_validation->set_rules($config);
    }
}
