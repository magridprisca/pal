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
    $data['discussion']=$this->M_discussion->getList();
		//$data['discussionTopic']=$this->M_discussion->getcountDiscussion();
    $data['menu']='discussion';

    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('umum/V_listDiscussion', $data);
    $this->load->view('umum/V_footer');
	}

	public function getDiscuss($id){
		$data['discuss']=$this->M_discussion->findDetail($id);
		$data['menu']='discussion';
		$data['detailReply']=$this->M_discussion->getAll();

		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('umum/V_doingDiscussion', $data);
    $this->load->view('umum/V_footer');
	}

	public function add(){
		date_default_timezone_set('Asia/Jakarta');
		$this->form_validation->set_rules('topick', 'topickDiscuss', 'required');
		$this->form_validation->set_rules('content', 'contentDiscuss', 'required');
		$data = array(
			'topic'		=> $this->input->post('topick'),
			'discContent'	=> $this->input->post('content'),
			'dateOfDiscuss' => date('Y-m-d h:i:s'),
			'userID' => $_SESSION['user']
		);
		$this->M_discussion->create($data);
		redirect(base_url('discuss'));
	}
}
?>
