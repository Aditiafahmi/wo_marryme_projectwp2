<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('auth_model'); // Sesuaikan dengan nama model Anda
    }

    public function index() {
        $this->load->view('login');
    }

    public function process_login() {
        $username = $this->input->post('user_username');
        $password = $this->input->post('user_password');

        $user = $this->auth_model->get_user($username);

        if ($user && $user['user_password'] == md5($password)) {
            if ($user['status'] == 1) {
                // Akun sudah diaktivasi, izinkan login
                $this->session->set_userdata('ADMIN', $user['id']);
                $this->session->set_userdata('user_username', $username);
                redirect('admin/index'); // Ganti dengan halaman setelah login berhasil
            } else {
                // Akun belum diaktivasi
                redirect('login/index?error=1&message=Akun Anda belum diaktivasi. Silakan periksa email Anda untuk aktivasi.');
            }
        } else {
            // Login gagal
            redirect('login/index?error=1&message=Login Anda Gagal. Periksa kembali username dan password Anda.');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_username');
        redirect('login/index?signout=1');
    }
}
