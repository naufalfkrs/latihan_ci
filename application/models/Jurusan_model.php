<?php

class Jurusan_model extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('jurusan')->result_array();
    }
}
