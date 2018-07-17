<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_knowledge extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_knowledge');
		$this->load->helper('url_helper');
	}
	public function add(){
		$data['menu']='knowledge';

    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('umum/V_addKnowledge');
    $this->load->view('umum/V_footer');
	}
	public function save(){

	}

	public function read(){
		$data['menu']='dashboard';
		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
		$this->load->view('umum/V_files');
		$this->load->view('umum/V_footer');
	}
}
?>
