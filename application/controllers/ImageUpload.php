<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImageUpload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the necessary libraries and helpers
        $this->load->helper('url', 'form');
        $this->load->library('form_validation', 'upload');
        $this->load->model('Image_model');  // Model to handle DB insert
    }

    public function index() {
        // Load the view with the upload form
        $this->load->view('image_upload_form');
    }

    public function upload_image() {
        // Set validation rules for the form input
        $this->form_validation->set_rules('image', 'Image', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload form with errors
            $this->load->view('image_upload_form');
        } else {
            // Upload configuration
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // Max file size in KB

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                // Image upload successful, get the uploaded file data
                $upload_data = $this->upload->data();

                // Store the image path in the database
                $image_path = 'uploads/' . $upload_data['file_name']; // Path relative to the root

                // Save image data to the database
                $this->Image_model->insert_image($image_path);

                // Success message
                $this->load->view('upload_success', ['image_path' => $image_path]);
            } else {
                // Upload failed, show error message
                $error = $this->upload->display_errors();
                $this->load->view('image_upload_form', ['error' => $error]);
            }
        }
    }
}
