<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Function to insert image path into the database
    public function insert_image($image_path) {
        $data = array(
            'image_path' => $image_path
        );

        return $this->db->insert('table4', $data);
    }
}
