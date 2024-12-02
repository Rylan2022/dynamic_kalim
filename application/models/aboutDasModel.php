<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutDasModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    

    public function getTable1Data() {
        return $this->db->get('table1')->result_array();
    }

    public function getTable2Data() {
        return $this->db->get('table2')->result_array();
    }

    public function getTable3Data() {
        return $this->db->get('table3')->result_array();
    }
    public function getTable4Data() {
        return $this->db->get('table4')->result_array();
    }
    public function getTable5Data() {
        return $this->db->get('table5')->result_array();
    }
    public function getTable6Data() {
        return $this->db->get('table6')->result_array();
    }
    public function getTable7Data() {
        return $this->db->get('table7')->result_array();
    }

    public function updateTable1($data) {
        $this->db->where('id', $data['id']);
        $this->db->update('table1', $data);
    }

    public function updateTable2($data) {
        $this->db->where('id', $data['id']);
        $this->db->update('table2', $data);
    }

    public function updateTable3($data) {
        $this->db->where('id', $data['id']);
        $this->db->update('table3', $data);
    }

    public function update_table4($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('table4', $data);
    }
    public function update_table5($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('table5', $data);
    }

    public function update_table6($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('table6', $data);
    }
    public function update_table7($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('table7', $data);
    }
}
