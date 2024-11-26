<?php
defined('BASEPATH') or exit("No direct script allowed");

class GalleryController extends CI_Controller {
    public function photo_gallery() {
      $this->load->view('common/header');
      $this->load->view('gallery/photo-gallery-v5');
      $this->load->view('common/footer');
    }
    public function property_grid() {
      $this->load->view('common/header');
      $this->load->view('gallery/property-grid-v1');
      $this->load->view('common/footer');
    }
    public function property_single() {
      $this->load->view('common/header');
      $this->load->view('gallery/property-single-v1');
      $this->load->view('common/footer');
    }

}