<?php
// application/models/Gallery_model.php

class Gallery_model extends CI_Model
{
    public function getAllGallery()
    {
        return $this->db->get('gallery')->result();
    }

    public function my_query_function() {
        $query = $this->db->query("SELECT * FROM gallery");

        if (!$query) {
            // Menampilkan pesan error jika query tidak berhasil dieksekusi
            echo $this->db->error();
        }

        // Lanjutkan dengan pemrosesan hasil query atau tindakan lainnya
    }

    public function add_gallery($gallery_heading, $gallery_desc, $gallery_image_name, $gallery_image_size) {
        // Implementasi aksi tambah gallery
        // ...
        $data = array(
            'gallery_heading' => $gallery_heading,
            'gallery_desc' => $gallery_desc,
            'gallery_image' => $gallery_image_name
            // Sesuaikan dengan struktur tabel sebenarnya
        );

        $query = $this->db->insert('gallery', $data);
        return $query;
    }

    public function edit_gallery($id, $gallery_heading, $gallery_desc, $gallery_image_name, $gallery_image_size) {
        // Implementasi aksi edit gallery
        // ...
        $data = array(
            'gallery_heading' => $gallery_heading,
            'gallery_desc' => $gallery_desc,
            'gallery_image' => $gallery_image_name
            // Sesuaikan dengan struktur tabel sebenarnya
        );

        $this->db->where('id', $id);
        $query = $this->db->update('gallery', $data);
        return $query;
    }

    public function delete_gallery($id) {
        // Implementasi aksi delete gallery
        // ...
        $this->db->where('id', $id);
        $query = $this->db->delete('gallery');
        return $query;
    }
}
