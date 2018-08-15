<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_discussion extends CI_Controller {
	public function __construct(){
		parent::__construct();
    $this->load->model('M_user');
		$this->load->model('M_discussion');
		$this->load->helper('url_helper');
	}
	public function index(){
    $data['user']=$this->M_user->findDetail($_SESSION['user']);
    $data['discuss']=$this->M_discussion->getAll();
    $data['menu']='discussion';

    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('admin/V_listDiscussion', $data);
    $this->load->view('umum/V_footer');
	}
	public function getDiscuss(){
		$data['discuss']=$this->M_discussion->findDetail();
		$data['menu']='discussion';

		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('admin/V_listDiscussion', $data);
    $this->load->view('umum/V_footer');
	}
}
?>
