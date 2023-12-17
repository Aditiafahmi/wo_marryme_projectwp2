<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('testimonial_model'); // Memuat model Testimonial_model
        $this->load->model('Contact_model');
    }

    public function login() {
        if ($this->input->post('act') == 'login') {
            $username = $this->input->post('user_username');
            $password = md5($this->input->post('user_password'));

            $this->load->model('auth_model'); // Ganti 'auth_model' dengan nama model yang sesuai

            $user = $this->auth_model->getUser($username);

            if ($user && $password == $user['user_password']) {
                if ($user['status'] == 1) {
                    // Akun sudah diaktivasi, izinkan login
                    $this->session->set_userdata('ADMIN', $user['id']);
                    $this->session->set_userdata('user_username', $user['user_username']);
                    redirect('admin/index'); // Ganti dengan halaman tujuan setelah login berhasil
                } else {
                    // Akun belum diaktivasi
                    redirect('login?error=1&message=Akun belum diaktivasi. Silakan cek email Anda untuk aktivasi.');
                }
            } else {
                // Login gagal
                redirect('login?error=1&message=Login gagal. Periksa kembali username dan password Anda.');
            }
        }
    }

    public function register() {
        if ($this->input->post('act') == 'register') {
            $username = $this->input->post('user_username');
            $password = md5($this->input->post('user_password'));
            $email = $this->input->post('user_email');

            $this->load->model('auth_model'); // Ganti 'auth_model' dengan nama model yang sesuai

            $user = $this->auth_model->getUser($username);

            if (!$user) {
                // Username belum terdaftar, izinkan registrasi
                $this->auth_model->registerUser($username, $password, $email);
                redirect('login?registrasi=success');
            } else {
                // Username sudah terdaftar
                redirect('register?error=1&message=Username sudah terdaftar. Pilih username lain.');
            }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login?signout=success');
    }

    public function index() {
        $data['error'] = $this->input->get('error');
        $data['message'] = $this->input->get('message');

        $this->load->view('login', $data);
    }

    public function process_login() {
        $username = $this->input->post('user_username');
        $password = $this->input->post('user_password');

        $this->load->model('auth_model');

        $user = $this->auth_model->get_user($username);

        if ($user && $user['user_password'] == md5($password)) {
            if ($user['status'] == 1) {
                // Akun sudah diaktivasi, izinkan login
                $this->session->set_userdata('user_username', $username);
                redirect('admin/index'); // Ganti dengan halaman setelah login berhasil
            } else {
                // Akun belum diaktivasi
                redirect('auth/index?error=1&message=Akun Anda belum diaktivasi. Silakan periksa email Anda untuk aktivasi.');
            }
        } else {
            // Login gagal
            redirect('auth/index?error=1&message=Login Anda Gagal. Periksa kembali username dan password Anda.');
        }
    }

      // Mengedit Fitur
      public function edit_feature() {
        $id = $this->input->post('id');
        $features_name = $this->input->post('features_name');
        $features_icon = $this->input->post('features_icon');

        $this->load->model('features_model');
        $result = $this->features_model->edit_features($id, $features_name, $features_icon);

        if ($result) {
            redirect('admin/index.php?page=features');
        } else {
            redirect('admin/index.php?page=features');
        }
    }

    // Menghapus Fitur
    public function delete_feature() {
        $id = $this->input->get('id');

        $this->load->model('features_model');
        $result = $this->features_model->delete_features($id);

        if ($result) {
            redirect('admin/index.php?page=features&pesan=hapus');
        } else {
            redirect('admin/index.php?page=features&pesan=gagalhapus');
        }
    }

    // Menambahkan About
    public function add_about() {
        $about_heading = $this->input->post('about_heading');
        $about_text = $this->input->post('about_text');

        $this->load->model('about_model');
        $result = $this->about_model->add_about($about_heading, $about_text);

        if ($result) {
            redirect('admin/index.php?page=about&pesan=tambah');
        } else {
            redirect('admin/index.php?page=about&pesan=gagal');
        }
    }

    // Mengedit About
    public function edit_about() {
        $id = $this->input->post('id');
        $about_heading = $this->input->post('about_heading');
        $about_text = $this->input->post('about_text');

        $this->load->model('about_model');
        $result = $this->about_model->edit_about($id, $about_heading, $about_text);

        if ($result) {
            redirect('admin/index.php?page=about');
        } else {
            redirect('admin/index.php?page=about');
        }
    }

    public function add_packages() {
        $packages_heading = $this->input->post('packages_heading');
        $packages_price = $this->input->post('packages_price');
        $packages_list = $this->input->post('packages_list');
    
        $this->load->model('packages_model');
        $result = $this->packages_model->add_packages($packages_heading, $packages_price, $packages_list);
    
        if ($result) {
            redirect('admin/index.php?page=packages&pesan=tambah');
        } else {
            redirect('admin/index.php?page=packages&pesan=gagal');
        }
    }
    
    public function edit_packages() {
        $id = $this->input->post('id');
        $packages_heading = $this->input->post('packages_heading');
        $packages_price = $this->input->post('packages_price');
        $packages_list = $this->input->post('packages_list');
    
        $this->load->model('packages_model');
        $result = $this->packages_model->edit_packages($id, $packages_heading, $packages_price, $packages_list);
    
        if ($result) {
            redirect('admin/index.php?page=packages&pesan=berhasil');
        } else {
            redirect('admin/index.php?page=packages&pesan=gagal');
        }
    }
    
    public function delete_packages() {
        $id = $this->input->get('id');
    
        $this->load->model('packages_model');
        $result = $this->packages_model->delete_packages($id);
    
        if ($result) {
            redirect('admin/index.php?page=packages&pesan=hapus');
        } else {
            redirect('admin/index.php?page=packages&pesan=gagalhapus');
        }
    }


    public function add_gallery() {
        $gallery_heading = $this->input->post('gallery_heading');
        $gallery_desc = $this->input->post('gallery_desc');
        $gallery_image_name = $_FILES['gallery_image']['name'];
        $gallery_image_size = $_FILES['gallery_image']['size'];
    
        $this->load->model('gallery_model');
    
        $result = $this->gallery_model->add_gallery($gallery_heading, $gallery_desc, $gallery_image_name, $gallery_image_size);
    
        if ($result) {
            redirect('admin/index.php?page=gallery&pesan=tambah');
        } else {
            redirect('admin/index.php?page=gallery&pesan=gagal');
        }
    }
    
    public function edit_gallery() {
        $id = $this->input->post('id');
        $gallery_heading = $this->input->post('gallery_heading');
        $gallery_desc = $this->input->post('gallery_desc');
        $gallery_image_name = $_FILES['gallery_image']['name'];
        $gallery_image_size = $_FILES['gallery_image']['size'];
    
        $this->load->model('gallery_model');
    
        $result = $this->gallery_model->edit_gallery($id, $gallery_heading, $gallery_desc, $gallery_image_name, $gallery_image_size);
    
        if ($result) {
            redirect('admin/index.php?page=gallery&pesan=berhasil');
        } else {
            redirect('admin/index.php?page=gallery&pesan=gagal');
        }
    }
    
    public function delete_gallery() {
        $id = $this->input->get('id');
    
        $this->load->model('gallery_model');
    
        $result = $this->gallery_model->delete_gallery($id);
    
        if ($result) {
            redirect('admin/index.php?page=gallery&pesan=hapus');
        } else {
            redirect('admin/index.php?page=gallery&pesan=gagalhapus');
        }
    }

     // Fungsi untuk menambahkan blog
     public function add_blog() {
        $blog_date = date('Y-m-d h:i:s');
        $blog_heading = $this->input->post('blog_heading');
        $blog_text = $this->input->post('blog_text');
        $blog_image_name = $_FILES['blog_image']['name'];

        // Proses upload dan operasi tambah blog
        // ...

        // Menggunakan model untuk menambahkan blog
        $result = $this->Blog_model->add_blog($blog_date, $blog_heading, $blog_text, $blog_image_name);

        if ($result) {
            // Redirect atau berikan respons sukses
        } else {
            // Redirect atau berikan respons gagal
        }
    }

    // Fungsi untuk mengedit blog
    // Pastikan model Blog_model dimuat

    public function edit_blog() {
        $id = $this->input->post('id');
        $blog_date = $this->input->post('blog_date');
        $blog_heading = $this->input->post('blog_heading');
        $blog_text = $this->input->post('blog_text');
        $blog_image_name = $_FILES['blog_image']['name'];

        $this->load->model('Blog_model');
    
        // Logika pengeditan blog
        // ...
    
        // Menggunakan model untuk mengedit blog
        $result = $this->Blog_model->edit_blog($id, $blog_date, $blog_heading, $blog_text, $blog_image_name);
    
        if ($result) {
            // Redirect atau berikan respons sukses
        } else {
            // Redirect atau berikan respons gagal
            echo $this->db->error(); // Output pesan error database
        }
    }
    

    // Fungsi untuk menghapus blog
    public function delete_blog($id) {
        // Logika penghapusan blog
        // ...

        // Menggunakan model untuk menghapus blog
        $result = $this->Blog_model->delete_blog($id);

        if ($result) {
            // Redirect atau berikan respons sukses
        } else {
            // Redirect atau berikan respons gagal
        }
    }

    public function add_testimonial() {
        $testi_text = $this->input->post('testi_text');
        $testi_client = $this->input->post('testi_client');
        $testi_image_name = $_FILES['testi_image']['name'];

        // Proses upload dan operasi tambah testimonial
        // ...

        // Menggunakan model untuk menambahkan testimonial
        $result = $this->testimonial_model->add_testimonial($testi_text, $testi_client, $testi_image_name);

        if ($result) {
            // Redirect atau berikan respons sukses
            redirect('testimonial/index'); // Sesuaikan dengan URL yang benar
        } else {
            // Redirect atau berikan respons gagal
            redirect('testimonial/index'); // Sesuaikan dengan URL yang benar
        }
    }

    public function edit_testimonial() {
        $id = $this->input->post('id');
        $testi_text = $this->input->post('testi_text');
        $testi_client = $this->input->post('testi_client');
        $testi_image_name = $_FILES['testi_image']['name'];

        // Logika pengeditan testimonial
        // ...

        // Menggunakan model untuk mengedit testimonial
        $result = $this->testimonial_model->edit_testimonial($id, $testi_text, $testi_client, $testi_image_name);

        if ($result) {
            // Redirect atau berikan respons sukses
            redirect('testimonial/index'); // Sesuaikan dengan URL yang benar
        } else {
            // Redirect atau berikan respons gagal
            redirect('testimonial/index'); // Sesuaikan dengan URL yang benar
        }
    }

    public function delete_testimonial($id) {
        // Logika penghapusan testimonial
        // ...

        // Menggunakan model untuk menghapus testimonial
        $result = $this->testimonial_model->delete_testimonial($id);

        if ($result) {
            // Redirect atau berikan respons sukses
            redirect('testimonial/index'); // Sesuaikan dengan URL yang benar
        } else {
            // Redirect atau berikan respons gagal
            redirect('testimonial/index'); // Sesuaikan dengan URL yang benar
        }
    }

    public function add_contact() {
        $contact_date = date('Y-m-d h:i:s');
        $contact_name = $this->input->post('contact_name');
        $contact_email = $this->input->post('contact_email');
        $contact_subject = $this->input->post('contact_subject');
        $contact_message = $this->input->post('contact_message');

        $result = $this->Contact_model->add_contact($contact_date, $contact_name, $contact_email, $contact_subject, $contact_message);

        if ($result) {
            redirect('index.php?pesan=success#contact');
            // atau tampilkan pesan sukses
        } else {
            redirect('index.php#contact');
            // atau tampilkan pesan gagal
        }
    }

    public function delete_contact($id) {
        $result = $this->Contact_model->delete_contact($id);

        if ($result) {
            redirect('admin/index.php?page=contact&pesan=hapus');
            // atau tampilkan pesan sukses
        } else {
            redirect('admin/index.php?page=contact&pesan=gagalhapus');
            // atau tampilkan pesan gagal
        }
    }
    


    // Tambahkan metode otentikasi lainnya jika diperlukan
}
