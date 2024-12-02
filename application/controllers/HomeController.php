<?php
defined('BASEPATH') or exit("No direct script allowed");

class HomeController extends CI_Controller {
  public function __construct() {
    parent::__construct();
    $this->load->model('aboutDasModel');
}
    public function index() {
      $this->load->view('common/header');
      $this->load->view('home/index');
      $this->load->view('common/footer');
    }
    public function about() {
      $data['table1'] = $this->aboutDasModel->getTable1Data();
      $data['table2'] = $this->aboutDasModel->getTable2Data();
      $data['table3'] = $this->aboutDasModel->getTable3Data(); 
      $data['table4'] = $this->aboutDasModel->getTable4Data(); 
      $data['table5'] = $this->aboutDasModel->getTable5Data(); 
      $data['table6'] = $this->aboutDasModel->getTable6Data(); 
      // $data['table7'] = $this->aboutDasModel->getTable7Data(); 

      $this->load->view('common/header');
      $this->load->view('home/about', $data);
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