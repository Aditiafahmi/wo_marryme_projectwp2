<?php
// application/models/Testimonial_model.php

class Testimonial_model extends CI_Model
{
    public function getAllTestimonial()
    {
        return $this->db->get('testimonial')->result();
    }

    public function add_testimonial($testi_text, $testi_client, $testi_image_name)
    {
        $data = array(
            'testi_text' => $testi_text,
            'testi_client' => $testi_client,
            'testi_image' => $testi_image_name
            // Sesuaikan dengan struktur tabel sebenarnya
        );

        $query = $this->db->insert('testimonial', $data);
        return $query;
    }

    public function edit_testimonial($id, $testi_text, $testi_client, $testi_image_name)
    {
        $data = array(
            'testi_text' => $testi_text,
            'testi_client' => $testi_client,
            'testi_image' => $testi_image_name
            // Sesuaikan dengan struktur tabel sebenarnya
        );

        $this->db->where('id', $id);
        $query = $this->db->update('testimonial', $data);
        return $query;
    }

    public function delete_testimonial($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('testimonial');
        return $query;
    }
}
