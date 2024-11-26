<?php
defined('BASEPATH') or exit("No direct script allowed");

class BlogController extends CI_Controller {
    public function blog_details() {
      $this->load->view('common/header');
      $this->load->view('blog/blog_details');
      $this->load->view('common/footer');

    }
    public function blog_grid() {
      $this->load->view('common/header');
      $this->load->view('blog/blog_grid_v4');
      $this->load->view('common/footer');
    }
    public function blog_single() {
      $this->load->view('common/header');
      $this->load->view('blog/blog_single_v1');
      $this->load->view('common/footer');
    }
}