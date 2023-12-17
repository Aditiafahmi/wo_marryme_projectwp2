<?php
// application/models/Features_model.php

class Features_model extends CI_Model
{
    public function getAllFeatures()
    {
        return $this->db->get('features')->result();
    }

    
    public function add_features($features_name, $features_icon) {
        $data = array(
            'features_name' => $features_name,
            'features_icon' => $features_icon
        );

        return $this->db->insert('features', $data);
    }

    public function edit_features($id, $features_name, $features_icon) {
        $data = array(
            'features_name' => $features_name,
            'features_icon' => $features_icon
        );
    
        $this->db->where('id', $id);
        return $this->db->update('features', $data);
    }

    public function delete_features($id) {
        $this->db->where('id', $id);
        return $this->db->delete('features');
    }
    
    
}
