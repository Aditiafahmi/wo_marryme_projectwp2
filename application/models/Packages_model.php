<?php
// application/models/Features_model.php

class packages_model extends CI_Model
{
   
    public function getAllPackages()
    {
        return $this->db->get('packages')->result();
    }

    public function add_packages($packages_heading, $packages_price, $packages_list) {
        $data = array(
            'packages_heading' => $packages_heading,
            'packages_price' => $packages_price,
            'packages_list' => $packages_list
        );

        return $this->db->insert('packages', $data);
    }

    public function edit_packages($id, $packages_heading, $packages_price, $packages_list) {
        $data = array(
            'packages_heading' => $packages_heading,
            'packages_price' => $packages_price,
            'packages_list' => $packages_list
        );

        $this->db->where('id', $id);
        return $this->db->update('packages', $data);
    }

    public function delete_packages($id) {
        return $this->db->delete('packages', array('id' => $id));
    }
}
