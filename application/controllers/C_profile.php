<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profile extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_division');
		$this->load->helper('url_helper');
	}

	public function index(){
		$data['menu']='profile';
		$data['user']=$this->M_user->findDetail($_SESSION['user']);
		$data['divisi']=$this->M_division->getAll();

    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('admin/V_profile', $data);
    $this->load->view('admin/V_footer');
	}

	public function edit(){
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('userID', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('divisi', 'Division', 'required');
		if ($this->form_validation->run() == FALSE){
			$data = array(
				'name'		=> set_value('name'),
				'divisionID'	=> set_value('divisi'),
				'userEmail'		=> set_value('email')
			);
			$this->M_user->update($_SESSION['user'],$data);
			redirect(base_url('profile'));
		}
	}
}
?>
