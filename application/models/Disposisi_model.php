<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Disposisi_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT * FROM disposisi
                ";
        return $this->db->query($query)->result_array();
    }

}
