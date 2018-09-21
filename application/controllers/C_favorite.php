<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_favorite extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_division');
		$this->load->model('M_knowledge');
		$this->load->model('M_comment');
		$this->load->model('M_discussion');
		$this->load->model('M_reply');
		$this->load->helper('url_helper');
	}
  public function kno(){
		$data['knowledge']=$this->M_knowledge->getAllTop();
    $data['menu']='favorit';

    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('umum/V_favKno', $data);
    $this->load->view('umum/V_footer');
  }
  public function dis(){
		$data['discussion']=$this->M_discussion->getAllTop();
    $data['menu']='favorit';

    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('umum/V_favDis', $data);
    $this->load->view('umum/V_footer');
  }
}
?>
