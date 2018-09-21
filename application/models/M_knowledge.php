<?php
class M_knowledge extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->where('knowledge.userID=user.userID')->get('knowledge,user');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}

	public function getAllsearch($kateg, $cari, $div){
    $hasil = $this->db->where("knowledge.userID=user.userID and ".$kateg." Like '%".$cari."%' and knowledge.divisionID=".$div)->get('knowledge,user');
		//$hasil = $this->db->where("knowledge.userID=user.userID and title LIKE 'lain' and knowledge.divisionID='32'")->get('knowledge,user');

		if($hasil->num_rows() > 0){
      return $hasil->result();
    }else {
      return array();
    }
  }
	public function getAllperDiv($div){
		$hasil = $this->db->where('knowledge.userID=user.userID and knowledge.divisionID='.$div)->get('knowledge,user');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
	public function getAllperUser($id){
		$hasil = $this->db->where('knowledge.userID=user.userID and knowledge.userID="'.$id.'"')->get('knowledge,user');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('knowledge', $data);
  }
  public function update($id, $data){
    $this->db->where('knowledgeID',$id)->update('knowledge',$data);
  }
  public function delete($id){
    $this->db->where('knowledgeID',$id)->delete('knowledge');
  }
  public function findDetail($id){
    $hasil = $this->db->where('knowledgeID='.$id.' and knowledge.divisionID=division.divisionID')->limit(1)->get('knowledge,division');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  } //taksit=0, eksplisit=1
	public function confirmeks($type){
		$hasil = $this->db->select('knowledge.title, user.name');
		$hasil = $this->db->from('knowledge');
		$hasil = $this->db->join('user');
		$hasil = $this->db->ON('knowledge.userID=user.userID');
		$hasil = $this->db->where('type = '.$type);
		$query->$hasil->db->get();
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
}
?>
