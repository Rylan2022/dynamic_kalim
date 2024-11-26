<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('register');
    }

    public function process() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        if ($password !== $confirm_password) {
            $this->session->set_flashdata('error', 'Passwords do not match.');
            redirect('register');
        }

        if ($this->User_model->is_username_taken($username)) {
            $this->session->set_flashdata('error', 'Username is already taken.');
            redirect('register');
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $data = [
            'username' => $username,
            'password' => $hashed_password,
        ];

        if ($this->User_model->register_user($data)) {
            $this->session->set_flashdata('success', 'Registration successful. Please login.');
            redirect('login');
        } else {
            $this->session->set_flashdata('error', 'An error occurred. Please try again.');
            redirect('register');
        }
    }
}
