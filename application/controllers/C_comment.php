<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_comment extends CI_Controller {
	public function __construct(){
		parent::__construct();
    $this->load->model('M_user');
		$this->load->model('M_knowledge');
		$this->load->model('M_comment');
		$this->load->helper('url_helper');
	}
	public function add($div){
		date_default_timezone_set('Asia/Jakarta');
		$data = array(
			'content'        	=>	$this->input->post('isi'),
			'dateOfComment'		=>	date('Y-m-d h:i:s'),
			'UserID'				  =>	$_SESSION['user'],
			'knowledgeID'			=>	$this->input->post('kno')
		);
		$this->M_comment->create($data);
		redirect(base_url('C_knowledge/detail/'.$this->input->post('kno').'/'.$div));
	}
	public function del($id,$idKno,$div){
		$this->M_comment->delete($id);
		redirect(base_url('C_knowledge/detail/'.$idKno.'/'.$div));
	}
}
?>
