<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT * FROM surat_masuk
                ";
        return $this->db->query($query)->result_array();
    }

    public function deleteSuratMasuk($suratId)
    {
        $this->db->where('id', $suratId);
        $query = $this->db->delete('surat_masuk');

        return $query;
    }

}
