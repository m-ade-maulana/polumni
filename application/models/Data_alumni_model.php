<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_alumni_model extends CI_Model
{
    public function get_alumni()
    {
        $this->db->select('*');
        $this->db->from('tb_data_diri');
        $this->db->join('tb_foto_profile', 'tb_data_diri.id_account = tb_foto_profile.id_account');
        $query = $this->db->get();
        return $query;
    }
}
