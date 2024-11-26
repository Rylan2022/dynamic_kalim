<?php
defined('BASEPATH') or exit("No direct script allowed");

class RegisterController extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('RegisterModel');
    $this->load->library('session');
  }



  public function index()
  {
    $this->load->view('login');
  }

  public function process()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->User_model->validate_user($username, $password);

    if ($user) {
      $this->session->set_userdata('user_id', $user->id);
      redirect('dashboard'); // Change to your dashboard route
    } else {
      $this->session->set_flashdata('error', 'Invalid username or password.');
      redirect('login');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('user_id');
    $this->session->sess_destroy();
    redirect('login');
  }
}


