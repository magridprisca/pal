<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_knowledge extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_division');
		$this->load->model('M_knowledge');
		$this->load->model('M_comment');
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
				$config['upload_path'] = base_url('assets/upload');
				$config['allowed_types']='gif|jpg|jpeg|gif|mp3|mp4|3gp|mpg|mov|pdf';
				$config['max_size']='10240000000';
				$this->load->library('upload',$config);
				$this->load->initialize($config);

			date_default_timezone_set('Asia/Jakarta');
			$divi=set_value('divisi');
			$nama=hash("adler32", basename($_FILES["data"]["name"]), 0);
			$imageFileType = pathinfo(basename($_FILES["data"]["name"]),PATHINFO_EXTENSION);
			$target_dir = "assets/upload/".$divi."/".$nama.".".$imageFileType;

			$uploadOk = 1;
			if (file_exists($target_dir)) {
				echo "Sorry, file already exists.";
				$uploadOk = 0;
			}
			// Check file size
			/*if ($_FILES["data"]["size"] > 104857600) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}
			// Allow certain file formats

				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" && $imageFileType != "mp4" && $imageFileType != "3gp" && $imageFileType != "mpg"
				&& $imageFileType != "mov" && $imageFileType != "pdf") {
					echo "Sorry, type of your files (".$imageFileType.") not allowed.";
					$uploadOk = 0;
				}*/
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
				if (move_uploaded_file($_FILES["data"]["tmp_name"], $target_dir)) {
					echo "The file ". basename( $_FILES["data"]["name"]). " has been uploaded.";
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
					redirect(base_url('C_knowledge/viewList'));
				} else {
					echo "Sorry, there was an error uploading your file.";
				}
			}
		}
	}

	public function read($divapa){
		$this->form_validation->set_rules('isi','Isi','required');
		$this->form_validation->set_rules('kateg','Kategori','required');

		if($this->form_validation->run() == FALSE){
			$data['menu']='dashboard';
			$data['divi']=$this->M_division->findDetail($divapa);
			$data['knowledge']=$this->M_knowledge->getAllperDiv($divapa);

			$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
			$this->load->view('umum/V_files');
			$this->load->view('umum/V_footer');
		}else {
			$data['menu']='dashboard';
			$data['divi']=$this->M_division->findDetail($divapa);
			$kat=set_value('kateg');
			$isi=set_value('isi');
			$data['cek']= $kat." ".$isi." ".$divapa;
			//$data['knowledge']=$this->M_knowledge->getAllperDiv($divapa);
			$data['knowledge']=$this->M_knowledge->getAllsearch($kat, $isi, $divapa);
			$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
			$this->load->view('umum/V_files');
			$this->load->view('umum/V_footer');
		}
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
		$data['comment']=$this->M_comment->getAllid($id);
		$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
		$this->load->view('umum/V_Show',$data);
		$this->load->view('umum/V_footer');
	}

public function confirm(){
	$data['menu']='knowledge';
	$data['kno0']=$this->M_knowledge->confirmeks(0);
	$data['kno1']=$this->M_knowledge->confirmeks(1);
	$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
	$this->load->view('umum/V_konfirmKnowledge');
	$this->load->view('umum/V_footer');
}

public function change($value, $id){
	$data['menu']='knowledge';
		$data = array(
			'type' => $value
		);
	$res=$this->M_knowledge->update($data);
	$this->load->view($_SESSION['level'].'/V_header_'.$_SESSION['level'],$data);
	$this->load->view('umum/V_konfirmKnowledge');
	$this->load->view('umum/V_footer');
}
}
?>
