<?php
// application/models/Auth_model.php

class Auth_model extends CI_Model {

    public function get_user($username) {
        $this->db->where('user_username', $username);
        $query = $this->db->get('users'); // Ganti 'users' dengan nama tabel pengguna Anda
        return $query->row_array();
    }

    // Jika Anda ingin menambahkan fungsi-fungsi lain terkait otentikasi, lakukan di sini.
}
