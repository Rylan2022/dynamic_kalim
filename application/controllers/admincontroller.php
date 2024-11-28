<?php
defined('BASEPATH') or exit("No direct script allowed");

class admincontroller extends CI_Controller
{
    // public function dashbord()
    // {
    //     $this->load->view('admin/common/sidebar');
    //     $this->load->view('admin/common/header');
    //     // $this->load->view('admin/index');
    //     $this->load->view('admin/aboutAdmin');
    //     $this->load->view('admin/common/footer');
    // }
    public function login()
    {
        // $this->load->view('admin/common/header');
        // $this->load->view('admin/common/sidebar');
        $this->load->view('admin/pages_sign_in');
        // $this->load->view('admin/common/footer');
    }
    public function register()
    {
        // $this->load->view('admin/common/header');
        // $this->load->view('admin/common/sidebar');
        $this->load->view('admin/pages_sign_up');
        // $this->load->view('admin/common/footer');
    }

}