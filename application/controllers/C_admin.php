<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper('url_helper');
	}
	public function index(){
		$data['menu']='dashboard';

    $this->load->view('admin/V_header_admin',$data);
    $this->load->view('umum/V_dashboard');
    $this->load->view('umum/V_footer');
	}
}
?>
