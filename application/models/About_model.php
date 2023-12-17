<?php
// application/models/Features_model.php

class about_model extends CI_Model
{
    public function getAbout()
    {
        return $this->db->get('about')->result();
    }

     // Menambahkan About
     public function add_about($about_heading, $about_text) {
        $data = array(
            'about_heading' => $about_heading,
            'about_text' => $about_text
        );

        return $this->db->insert('about', $data);
    }

    // Mengedit About
    public function edit_about($id, $about_heading, $about_text) {
        $data = array(
            'about_heading' => $about_heading,
            'about_text' => $about_text
        );

        $this->db->where('id', $id);
        return $this->db->update('about', $data);
    }

}
