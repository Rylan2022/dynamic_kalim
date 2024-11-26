<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutDasCon extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('aboutDasModel');
    }

    public function index() {
        $data['table1'] = $this->aboutDasModel->getTable1Data();
        $data['table2'] = $this->aboutDasModel->getTable2Data();
        $data['table3'] = $this->aboutDasModel->getTable3Data();

        $this->load->view('admin/aboutDashbord', $data);
    }

    public function updateTable1() {
        $this->aboutDasModel->updateTable1($this->input->post());
        redirect('admin/aboutDashbord');
    }

    public function updateTable2() {
        $this->aboutDasModel->updateTable2($this->input->post());
        redirect('admin/aboutDashbord');
    }

    public function updateTable3() {
        $this->aboutDasModel->updateTable3($this->input->post());
        redirect('admin/aboutDashbord');
    }
}
