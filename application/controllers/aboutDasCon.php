<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class aboutDasCon extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('upload');
        $this->load->model('aboutDasModel');
    }

    public function index() {
        $data['table1'] = $this->aboutDasModel->getTable1Data();
        $data['table2'] = $this->aboutDasModel->getTable2Data();
        $data['table3'] = $this->aboutDasModel->getTable3Data();
        $data['table4'] = $this->aboutDasModel->getTable4Data();
        $data['table5'] = $this->aboutDasModel->getTable5Data();
        $data['table6'] = $this->aboutDasModel->getTable6Data();
        $data['table7'] = $this->aboutDasModel->getTable7Data();

        $this->load->view('admin/common/header');
        $this->load->view('admin/common/sidebar');
        $this->load->view('admin/aboutDashbord', $data);
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
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; // 2MB
        $this->upload->initialize($config);
    
        // Get data from POST
        $id = $this->input->post('id');
        $title_5 = $this->input->post('title_5');
        $title_6 = $this->input->post('title_6');
        $description_4 = $this->input->post('description_4');
    
        // Check if an image is uploaded
        if ($_FILES['image']['name']) {
            if ($this->upload->do_upload('image')) {
                $image_data = $this->upload->data();
                $image_path = 'uploads/' . $image_data['file_name'];
            } else {
                // Handle upload error
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('aboutDasCon');
            }
        } else {
            // If no image is uploaded, keep the existing image
            $image_path = $this->input->post('image_path');
        }
    
        // Prepare the data for the update
        $data = array(
            'title_5' => $title_5,
            'title_6' => $title_6,
            'description_4' => $description_4,
            'image_path' => $image_path // Correct column name here
        );
    
        // Call the model to update the record
        $this->aboutDasModel->update_table4($id, $data);
    
        // Redirect back to the page
        redirect('aboutDasCon');
    }

    
    public function updateTable5() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; // 2MB
        $this->upload->initialize($config);
    
        // Get data from POST
        $id = $this->input->post('id');
        $title_6 = $this->input->post('title_6');
        $title_7 = $this->input->post('title_7');
        $title_8 = $this->input->post('title_8');
        $title_9 = $this->input->post('title_9');
        $description_5 = $this->input->post('description_5');
        $description_6 = $this->input->post('description_6');
        $description_7 = $this->input->post('description_7');
    
        // Check if an image is uploaded
        if ($_FILES['image']['name']) {
            if ($this->upload->do_upload('image')) {
                $image_data = $this->upload->data();
                $image_path = 'uploads/' . $image_data['file_name'];
            } else {
                // Handle upload error
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error', $error);
                redirect('aboutDasCon');
            }
        } else {
            // If no image is uploaded, keep the existing image
            $image_path = $this->input->post('Image_path');
        }
    
        // Prepare the data for the update
        $data = array(
            'title_6' => $title_6,
            'title_7' => $title_7,
            'title_8' => $title_8,
            'title_9' => $title_9,
            'description_5' => $description_5,
            'description_6' => $description_6,
            'description_7' => $description_7,
            'Image_path' => $image_path // Correct column name here
        );
    
        // Call the model to update the record
        $this->aboutDasModel->update_table5($id, $data);
    
        // Redirect back to the page
        redirect('aboutDasCon');
    }

    public function updateTable6() {
        $data = $this->input->post();
        $this->aboutDasModel->updateTable6($data);
        redirect('aboutDasCon/index');
    }
    
            public function updateTable7() {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048; // 2MB
            $this->load->library('upload', $config);
    
            // Get data from POST
            $id = $this->input->post('id');
            $title_1 = $this->input->post('title_1');
            $title_2 = $this->input->post('title_2');
    
            // Initialize image paths with existing ones
            $image_path_1 = $this->input->post('image_path_1');
            $image_path_2 = $this->input->post('image_path_2');
            $image_path_3 = $this->input->post('image_path_3');
            $image_path_4 = $this->input->post('image_path_4');
    
            // Check and process file uploads
            $image_files = ['image_1', 'image_2', 'image_3', 'image_4'];
            $image_paths = [&$image_path_1, &$image_path_2, &$image_path_3, &$image_path_4];
            for ($i = 0; $i < count($image_files); $i++) {
                if (!empty($_FILES[$image_files[$i]]['name'])) {
                    if ($this->upload->do_upload($image_files[$i])) {
                        $image_data = $this->upload->data();
                        $image_paths[$i] = 'uploads/' . $image_data['file_name'];
                    } else {
                        // Handle upload error
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect('aboutDasCon');
                        return;
                    }
                }
            }
    
            // Prepare the data for the update
            $data = array(
                'title_1' => $title_1,
                'title_2' => $title_2,
                'image_path_1' => $image_path_1,
                'image_path_2' => $image_path_2,
                'image_path_3' => $image_path_3,
                'image_path_4' => $image_path_4,
            );
    
            // Call the model to update the record
            if ($this->aboutDasModel->update_table7($id, $data)) {
                $this->session->set_flashdata('success', 'Record updated successfully!');
            } else {
                log_message('error', $this->db->last_query());
                $this->session->set_flashdata('error', 'Failed to update the record.');
            }
    
            // Redirect back to the page
            redirect('aboutDasCon');
        }
    
    
}
