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

	public function getAllsearch($kateg, $cari){
    $hasil = $this->db->where('knowledge.userID=user.userID and knowledge.'.$kateg.'="%'.$cari.'%"')->get('knowledge,user');
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
    $hasil = $this->db->where('knowledgeID',$id)->limit(1)->get('knowledge');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
