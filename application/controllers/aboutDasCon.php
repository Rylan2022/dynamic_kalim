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
        $data['table4'] = $this->aboutDasModel->getTable4Data();

        $this->load->view('admin/common/header');
        $this->load->view('admin/aboutAdmin', $data);
        // $this->load->view('admin/new', $data);
        $this->load->view('admin/common/footer');

    }

    public function updateTable1() {
        $data = $this->input->post();
        $this->aboutDasModel->updateTable1($data);
        redirect('aboutDasCon/index');
    }


    public function updateTable2() {
        $data = $this->input->post();
        $this->aboutDasModel->updateTable2($data);
        redirect('aboutDasCon/index');
    }


    public function updateTable3() {
        $data = $this->input->post();
        $this->aboutDasModel->updateTable3($data);
        redirect('aboutDasCon/index');
    }


    public function updateTable4() {
        $data = $this->input->post();
        $this->aboutDasModel->updateTable4($data);
        redirect('aboutDasCon/index');
    }
}
