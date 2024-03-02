<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insertUser($data) {
        return $this->db->insert('userdetails', $data);
    }
    public function getUser($unique_id) {
        $this->db->where('unique_id', $unique_id);
        $query = $this->db->get('userdetails');
        return $query->row_array();
    }
    public function check_unique_id($uniqueId) { 
        $this->db->select('unique_id');
        $this->db->from('userdetails');
        $this->db->where('unique_id', $uniqueId);
        $query = $this->db->get();
    
        return $query->num_rows() > 0;
    }
    

    public function updateUser($data, $unique_id) {
        $this->db->where('unique_id', $unique_id);
        return $this->db->update('userdetails', $data);
    }
    
}