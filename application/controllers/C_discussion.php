<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_discussion extends CI_Controller {
	public function __construct(){
		parent::__construct();
    $this->load->model('M_user');
		$this->load->model('M_discussion');
		$this->load->model('M_reply');
		$this->load->helper('url_helper');

	}
	public function index(){
    $data['discussion']=$this->M_discussion->getList();
    $data['menu']='discussion';

    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('umum/V_listDiscussion', $data);
    $this->load->view('umum/V_footer');
	}

	public function getDiscuss($id){
		$data['discuss']=$this->M_discussion->findDetail($id);
		$data['menu']='discussion';
		$data['detailReply']=$this->M_reply->getAllid($id);

		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('umum/V_doingDiscussion', $data);
    $this->load->view('umum/V_footer');
	}

	public function read(){
		$this->form_validation->set_rules('category','cat','required');
		$this->form_validation->set_rules('cari','car','required');

		$data['menu']='dashboard';
		$category=$this->input->post('category');
		$cari=$this->input->post('cari');
		$data['cek']= $category." ".$cari;
		$data['discussion']=$this->M_discussion->getAllsearch($category, $cari);

		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('umum/V_listDiscussion', $data);
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
	public function addReply(){
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			'replyContent'	=>	$this->input->post('isi'),
			'dateOfReply'		=>	date('Y-m-d h:i:s'),
			'UserID'				=>	$_SESSION['user'],
			'discusID'			=>	$this->input->post('discus')
		);
		$this->M_reply->create($data);
		redirect(base_url('C_discussion/getDiscuss/'.$this->input->post('discus')));
	}

	public function delete($id){
		$this->M_discussion->delete($id);
		redirect(base_url('discuss'));
	}
	public function delReply($id,$idDis){
		$this->M_reply->delete($id);
		redirect(base_url('C_discussion/getDiscuss/'.$idDis));
	}
}
?>
