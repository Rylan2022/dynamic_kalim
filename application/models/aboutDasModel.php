<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutDasModel extends CI_Model {

    public function getTable1Data() {
        return $this->db->get('table1')->result_array();
    }

    public function getTable2Data() {
        return $this->db->get('table2')->result_array();
    }

    public function getTable3Data() {
        return $this->db->get('table3')->result_array();
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
}
