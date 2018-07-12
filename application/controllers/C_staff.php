<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_staff extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->helper('url_helper');
	}
	public function index($page='V_admin'){
		$data['menu']='dashboard';
		//if(!file_exists(APPPATH."views/admin/".$page.'.php')){show_404();}

    $this->load->view('staff/V_header_staff',$data);
    $this->load->view('admin/V_admin');
    $this->load->view('admin/V_footer');
	}
}
?>
