<?php
defined('BASEPATH') or exit("No direct script allowed");

class HomeController extends CI_Controller {
    public function index() {
      $this->load->view('common/header');
      $this->load->view('home/index');
      $this->load->view('common/footer');
    }
    public function about() {
      $this->load->view('common/header');
      $this->load->view('home/about');
      $this->load->view('common/footer');
    }
    public function contact() {
      $this->load->view('common/header');
      $this->load->view('home/contact');
      $this->load->view('common/footer');
    }
    public function career() {
      $this->load->view('common/header');
      $this->load->view('home/career');
      $this->load->view('common/footer');
    }

}