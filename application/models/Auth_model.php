<?php

class Auth_model extends CI_Model
{
    public function tambah_data()
    {   
        $data = [
            "name" => htmlspecialchars($this->input->post('name', true)),
            "email" => htmlspecialchars($this->input->post('email', true)),
            "image" => 'default.jpg',
            "password" => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
            "role" => 'user',
            "is_active" => 1,
            "date_created" => time(),
        ];
        $this->db->insert('user', $data);
    }

    public function login()
    {
        
    }
}
