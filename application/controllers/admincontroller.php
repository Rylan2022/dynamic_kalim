<?php
defined('BASEPATH') or exit("No direct script allowed");

class AdminController extends CI_Controller
{
    public function dashbord()
    {
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/common/header');
        $this->load->view('admin/index');
        $this->load->view('admin/aboutAdmin');
        $this->load->view('admin/common/footer');
    }
}