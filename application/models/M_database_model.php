<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_database_model extends CI_Model
{

  // ------------------------------------------------------------------------
  // This function form create new data 
  // $table = name from table
  // $data = data for table
  // ------------------------------------------------------------------------
  public function create($table, $data)
  {
    $insert = $this->db->insert($table, $data);
    return $insert;
  }


  // ------------------------------------------------------------------------
  // This function form view all data from table database 
  // $table = name from table
  // ------------------------------------------------------------------------
  public function read_all($table)
  {
    $this->db->select('*');
    $this->db->from($table);
    return $this->db->get();
  }

  // ------------------------------------------------------------------------
  // This function form view all data from table database 
  // $table = name from table
  // $year = order by year
  // $by = schema order
  // ------------------------------------------------------------------------
  public function read_by_year($table)
  {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->order_by('tahun_lulusan', 'ASC');
    return $this->db->get();
  }

  // ------------------------------------------------------------------------
  // This function from read part is read some of the selected data 
  // $table = name from table
  // $where = the data you want to retrieve
  // $field = variable name you want to read
  // ------------------------------------------------------------------------
  public function read_part($table, $where, $field)
  {
    return $this->db->get_where($table, [$where => $field]);
  }

  public function counting()
  {
  }

  // ------------------------------------------------------------------------
  // This function from update is change the selected data
  // $field_tb = the data you want to update
  // $field_name = variable name you want to update
  // $table = name of table database
  // $value = the data you want to change
  // ------------------------------------------------------------------------
  public function update($field_tb, $field_name, $table, $value)
  {
    $this->db->where($field_tb, $field_name);
    return $this->db->update($table, $value);
  }

  // ------------------------------------------------------------------------
  // This function from delete_all is delete all data from table database 
  // $table = name from table
  // ------------------------------------------------------------------------
  public function delete_all($table)
  {
    return $this->db->empty_table($table);
  }

  // ------------------------------------------------------------------------
  // This function from read part is read some of the selected data 
  // $table = name from table
  // $where = the data you want to retrieve
  // $field = variable name you want to read
  // ------------------------------------------------------------------------
  public function delete_part($field_tb, $field_name, $table)
  {
    $this->db->where($field_tb, $field_name);
    return $this->db->delete($table);
  }

  // ------------------------------------------------------------------------

}

/* End of file M_database_model.php */
/* Location: ./application/models/M_database_model.php */