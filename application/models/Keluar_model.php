<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Keluar_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT * FROM surat_keluar
                ";
        return $this->db->query($query)->result_array();
    }

}
