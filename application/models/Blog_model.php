<?php
// application/models/Blog_model.php

class Blog_model extends CI_Model
{
    public function getAllBlog()
    {
        return $this->db->get('blog')->result();
    }

    public function add_blog($blog_date, $blog_heading, $blog_text, $blog_image_name)
    {
        $data = array(
            'blog_date' => $blog_date,
            'blog_heading' => $blog_heading,
            'blog_text' => $blog_text,
            'blog_image' => $blog_image_name
            // Sesuaikan dengan struktur tabel sebenarnya
        );

        $query = $this->db->insert('blog', $data);
        return $query;
    }

    public function edit_blog($id, $blog_date, $blog_heading, $blog_text, $blog_image_name)
    {
        $data = array(
            'blog_date' => $blog_date,
            'blog_heading' => $blog_heading,
            'blog_text' => $blog_text,
            'blog_image' => $blog_image_name
            // Sesuaikan dengan struktur tabel sebenarnya
        );

        $this->db->where('id', $id);
        $query = $this->db->update('blog', $data);
        return $query;
    }

    public function delete_blog($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->delete('blog');
        return $query;
    }
}
