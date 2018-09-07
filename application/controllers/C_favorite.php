<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_knowledge extends CI_Controller {
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

  }
  public function dis(){

  }
}
?>
