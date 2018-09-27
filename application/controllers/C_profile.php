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
		$data['divisi']=$this->M_division->getAllDiv();

    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
    $this->load->view('umum/V_profile', $data);
    $this->load->view('umum/V_footer');
	}

	public function edit(){
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('userID', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('divisi', 'Division', 'required');
		if ($this->form_validation->run() == FALSE){
			if(set_value('password')==null){
				$data = array(
					'name'		=> set_value('name'),
					'divisionID'	=> set_value('divisi'),
					'userEmail'		=> set_value('email')
				);
			}else{
				$data = array(
					'name'		=> set_value('name'),
					'password'	=> sha1(md5(sha1(set_value('password')))),
					'divisionID'	=> set_value('divisi'),
					'userEmail'		=> set_value('email')
				);
			}
			$this->M_user->update($_SESSION['user'],$data);
			redirect(base_url('profile'));
		}
	}

	public function photo(){
		$this->form_validation->set_rules('poto', 'photo', 'required');
		if ($this->form_validation->run() == FALSE){
			$config['upload_path'] = base_url('assets/upload');
			$config['allowed_types']='gif|jpg|jpeg|png';
			$config['max_size']='10240000000';
			$this->load->library('upload',$config);
			$this->load->initialize($config);

			date_default_timezone_set('Asia/Jakarta');
			$nama=hash("adler32", basename($_FILES["data"]["name"]), 0);
			$imageFileType = pathinfo(basename($_FILES["data"]["name"]),PATHINFO_EXTENSION);
			$target_dir = "assets/upload/users/".$nama.".".$imageFileType;

			$uploadOk = 1;
			if (file_exists($target_dir)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["data"]["tmp_name"], $target_dir)) {
					echo "The file ". basename( $_FILES["data"]["name"]). " has been uploaded.";
					$data = array(
						'userPhoto'				=> $target_dir
					);
					$this->M_user->update($_SESSION['user'],$data);
					redirect(base_url('profile'));
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}
	}
}
?>
