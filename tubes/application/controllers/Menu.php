<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->helper('url');
    }

	public function index() {
		$this->load->view('template/header');
		$this->load->view('v_halutama');
		$this->load->view('template/footer');
	}
}
