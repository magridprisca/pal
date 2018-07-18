<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_knowledge extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_division');
		$this->load->model('M_knowledge');
		$this->load->helper('url_helper');
	}
	public function add(){
		$this->form_validation->set_rules('title', 'Full Name', 'required');
		$this->form_validation->set_rules('category', 'Username', 'required');
		$this->form_validation->set_rules('divisi', 'Email', 'required');
		$this->form_validation->set_rules('tipe', 'Password', 'required');
		$this->form_validation->set_rules('description', 'Repeat Password', 'required');
		$this->form_validation->set_rules('data', 'data', '');

		if ($this->form_validation->run() == FALSE){
			$data['menu']='knowledge';
			$data['divisi']=$this->M_division->getAll();

	    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
	    $this->load->view('umum/V_addKnowledge',$data);
	    $this->load->view('umum/V_footer');
		}
		else {

			$target_dir = "assets/upload/";
			$target_file = $target_dir . basename($_FILES["data"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			$check = getimagesize($_FILES["data"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
			// Check if file already exists
			if (file_exists($target_file)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["data"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["data"]["tmp_name"], $target_file)) {
					echo "The file ". basename( $_FILES["data"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
			if($uploadOk== 1){
			$data = array(
				'title'					=> set_value('title'),
				'type'					=> 0,
				'category'			=> set_value('category'),
				'divisionID'		=> set_value('divisi'),
				'file'					=> $target_file,
				'fileType'			=> set_value('tipe'),
				'description'		=> set_value('description'),
				'dateOfUpload'	=> date("Y-m-d h:i:sa"),
				'userID'				=> $_SESSION['user'],
				'totalRate'			=> $target_file
			);
			$res=$this->M_knowledge->create($data);
			redirect(base_url($_SESSION['level']));
			}

		}


	}

	public function read(){
		$data['menu']='dashboard';

		$data['knowledge']=$this->M_knowledge->getAll();
		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
		$this->load->view('umum/V_files');
		$this->load->view('umum/V_footer');
	}
}
?>
