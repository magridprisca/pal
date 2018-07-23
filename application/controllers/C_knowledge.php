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
			$data['divisi']=$this->M_division->getAllDiv();

	    $this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
	    $this->load->view('umum/V_addKnowledge',$data);
	    $this->load->view('umum/V_footer');
		}
		else {
			date_default_timezone_set('Asia/Jakarta');
			$divi=set_value('divisi');
			$nama=hash("adler32", basename($_FILES["data"]["name"]), 0);
			$imageFileType = pathinfo(basename($_FILES["data"]["name"]),PATHINFO_EXTENSION);
			$target_dir = "assets/upload/".$divi."/".$nama.".".$imageFileType;

			$uploadOk = 1;

			// Check if file already exists
			if (file_exists($target_dir)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			if ($_FILES["data"]["size"] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats
			if(set_value('tipe')=='foto'){
				$check = getimagesize($_FILES["data"]["tmp_name"]);
				if($check !== false) {
					echo "File is an image - " . $check["mime"] . ".";
					$uploadOk = 1;
				} else {
					echo "File is not an image.";
					$uploadOk = 0;
				}
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
				}
			}elseif (set_value('tipe')=='video') {
				if($imageFileType != "mp4" && $imageFileType != "3gp" && $imageFileType != "mpg"
				&& $imageFileType != "mov" ) {
					echo "Sorry, only MP4, AVI, 3GP, MPG & MOV files are allowed.";
					$uploadOk = 0;
				}
			}else {
				if($imageFileType != "pdf") {
					echo "Sorry, only PDF files are allowed.";
					$uploadOk = 0;
				}
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["data"]["tmp_name"], $target_dir)) {
					echo "The file ". basename( $_FILES["data"]["name"]). " has been uploaded.";
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
			if($uploadOk== 1){
			$data = array(
				'knowledgeID'		=> set_value('divisi').date("Ymdhis"),
				'title'					=> set_value('title'),
				'type'					=> 0,
				'category'			=> set_value('category'),
				'divisionID'		=> set_value('divisi'),
				'file'					=> $target_dir,
				'fileType'			=> set_value('tipe'),
				'description'		=> set_value('description'),
				'dateOfUpload'	=> date("Y-m-d h:i:s"),
				'userID'				=> $_SESSION['user'],
				'totalRate'			=> "0"
			);
			$res=$this->M_knowledge->create($data);
			redirect(base_url($_SESSION['level']));
			}
		}
	}

	public function read($divapa){
//>>>>>>>>>>>Head
		$this->form_validation->set_rules('isi','Isi','required');
		$this->form_validation->set_rules('kateg','Kategori','required');

		if($this->form_validation->run()==false){
			$data['menu']='dashboard';
			$data['knowledge']=$this->M_knowledge->getAllperDiv($divapa);
			$data['divi']=$this->M_division->findDetail($divapa);
			$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
			$this->load->view('umum/V_files');
			$this->load->view('umum/V_footer');
		}else {
			$data['menu']='dashboard';
			$data['knowledge']=$this->M_knowledge->getAllsearch(set_value('kateg'), set_value('isi'));
			$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
			$this->load->view('umum/V_files');
			$this->load->view('umum/V_footer');
		}
//=======
		$data['menu']='dashboard';
		$data['divi']=$this->M_division->findDetail($divapa);
		$data['knowledge']=$this->M_knowledge->getAllperDiv($divapa);
		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
		$this->load->view('umum/V_files');
		$this->load->view('umum/V_footer');
//>>>>>>> 98c451949614fc39a72638d0b27576feaa39f6c8
	}

	public function viewList(){
		$data['menu']='knowledge';
		$data['knowledge']=$this->M_knowledge->getAllperUser($_SESSION['user']);
		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
		$this->load->view('umum/V_listKnow');
		$this->load->view('umum/V_footer');
	}
	public function detail($id,$divapa){
		$data['menu']='knowledge';
		$data['divi']=$this->M_division->findDetail($divapa);
		$data['knowledge']=$this->M_knowledge->findDetail($id);
		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
		$this->load->view('umum/V_Show',$data);
		$this->load->view('umum/V_footer');
	}
}
?>
