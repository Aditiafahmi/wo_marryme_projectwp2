<?php
// application/models/Contact_model.php

class Contact_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat library database di dalam model
    }
    public function addContact($data)
    {
        $this->db->insert('contacts', $data);
        return $this->db->insert_id();
    }
    public function getcontact()
    {
        // Contoh query untuk mengambil data kontak dari tabel 'contacts'
        $query = $this->db->get('contact');

        // Mengembalikan hasil query dalam bentuk array
        return $query->result_array();
    }

    
    public function add_contact($contact_date, $contact_name, $contact_email, $contact_subject, $contact_message) {
        $data = array(
            'contact_date' => $contact_date,
            'contact_name' => $contact_name,
            'contact_email' => $contact_email,
            'contact_subject' => $contact_subject,
            'contact_message' => $contact_message
        );

        return $this->db->insert('contact', $data);
    }

    public function delete_contact($id) {
        return $this->db->delete('contact', array('id' => $id));
    }
}
