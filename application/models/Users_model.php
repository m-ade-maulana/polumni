<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 *
 * Model Users_Model_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Users_model extends CI_Model
{

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function find_data($table, $field, $where)
  {
    $find = $this->db->where($table, [$where => $field]);
    return $find;
  }

  public function save_data($table, $value)
  {
    $insert = $this->db->insert($table, $value);
    return $insert;
  }
}
