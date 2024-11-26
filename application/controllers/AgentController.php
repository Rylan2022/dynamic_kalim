<?php
defined('BASEPATH') or exit("No direct script allowed");

class AgentController extends CI_Controller {
    public function agent_details() {
      $this->load->view('common/header');
      $this->load->view('agent/agent_details');
      $this->load->view('common/footer');
    }
    public function grid() {
      $this->load->view('common/header');
      $this->load->view('agent/agent_grid_view');
      $this->load->view('common/footer');
    }

}