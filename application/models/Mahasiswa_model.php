<?php

class Mahasiswa_model extends CI_Model
{
    public function get_data($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('nama', $keyword);
            // $this->db->or_like('email', $keyword);
        }
        return $this->db->get('mahasiswa', $limit, $start)->result_array();
    }

    public function get_detail($id)
    {
        return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
    }

    public function search()
    {
		$this->db->like('nama', $this->input->post('keyword'));
        return $this->db->get('mahasiswa')->row_array();
    }

    public function tambah_data()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
        ];
        $this->db->insert('mahasiswa', $data);
    }

    public function ubah_data()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp', true),
            "email" => $this->input->post('email', true),
            "jurusan" => $this->input->post('jurusan', true),
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('mahasiswa', $data);
    }

    public function hapus_data($id)
    {
        $this->db->delete('mahasiswa', ['id' => $id]);
    }

    public function count()
    {
        return $this->db->get('mahasiswa')->num_rows();
    }
}
