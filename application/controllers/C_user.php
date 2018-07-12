<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_user extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_division');
		$this->load->helper('url_helper');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index(){
		$data['err_message']="";
		$this->load->view('V_login',$data);
	}

	public function aksi_login(){
		$username = $this->input->post('user');
		//$password = $this->input->post('pass');
		$password = sha1(md5(sha1($this->input->post('pass'))));
		$isLogin = $this->M_user->login_authen($username, $password);

		$i = $this->M_user->authen_user($username);

		if ($isLogin == true && $i[0]['authentication'] < 3) {
			$newdata = array(
			'user'	=> $i[0]['userID'],
			'nama'	=> $i[0]['name'],
			'poto'	=> $i[0]['userPhoto'],
			'level'	=> $i[0]['level']
			);
			$this->session->set_userdata($newdata);
			$this->M_user->wrong_password($username, 0);
			if($i[0]['level']=='admin'){
				echo "<script>alert('login admin berhasil')</script>";
				redirect(base_url('admin'));
			}else if($i[0]['level']=='staff'){
				echo "<script>alert('login staff berhasil')</script>";
				redirect(base_url('staff'));
			}else{
				echo "<script>alert('login berhasil')</script>";
				redirect(base_url('user'));
			}
		}
		else{
			if ($i[0]['authentication'] < 3) {
				$update = $this->M_user->wrong_password($username, $i[0]['authentication']+1);
				$data['err_message'] = "GAGAL LOGIN " . ($i[0]['authentication']+1);
				$this->load->view('V_login', $data);
			}
			else{
				$data['err_message'] = "AKUN ANDA TERBLOCK";
				$this->load->view('V_login', $data);
			}
		}
	}

	public function register(){
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('userID', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('pass', 'Password', 'required');
		$this->form_validation->set_rules('pass2', 'Repeat Password', 'required');
		$this->form_validation->set_rules('divisi', 'Division', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['err_message']="";
			$data['divisi']=$this->M_division->getAll();
			$this->load->view('V_regist',$data);
		}
		else {
		  if($this->input->post('pass')==$this->input->post('pass2')){
				if($_FILES["photo"]["error"] == 4){
					$data = array(
						'name'		=> set_value('name'),
						'userID'	=> set_value('userID'),
						'password'	=> sha1(md5(sha1(set_value('pass')))),
						'divisionID'	=> set_value('divisi'),
						'userEmail'		=> set_value('email'),
						'level'	=> 'staff',
						'authentication' => 0
					);
					$this->M_user->create($data);
					redirect(base_url());
				}else{
						$imageName=basename($_FILES["photo"]["name"]);
						$imageFileType = pathinfo($imageName,PATHINFO_EXTENSION);
						$check = getimagesize($_FILES["photo"]["tmp_name"]);
						if($check !== false) {
							echo "File is an image - " . $check["mime"] . ".";
							$uploadOk = 1;
						} else {
							echo "File is not an image.";
							$uploadOk = 0;
						}
						// Check file size
						if ($_FILES["photo"]["size"] > 500000) {
							echo "Sorry, your file is too large.";
							$uploadOk = 0;
						}
						// Allow certain file formats
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
							echo "Sorry, only JPG, JPEG or PNG files are allowed.";
							$uploadOk = 0;
						}
						// Check if $uploadOk is set to 0 by an error
						if ($uploadOk == 0) {
							echo "Sorry, your file was not uploaded.";
						// if everything is ok, try to upload file
						} else {
							$data = array(
								'name'		=> set_value('name'),
								'userID'	=> set_value('userID'),
								'password'	=> sha1(md5(sha1(set_value('pass')))),
								'divisionID'	=> set_value('divisi'),
								'userEmail'		=> set_value('email'),
								'level'	=> 'user',
								'userPhoto'	=> $this->input->post(file_get_contents($_FILES['featured_img']['tmp_name'])),
								'authentication' => 0
							);
							$this->M_user->create($data);
							redirect(base_url());
						}
					}
		  }else{
					$data['err_message']="password tidak cocok";
					$this->load->view('V_regist',$data);
		  }
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
?>
