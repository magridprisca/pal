<?php
class M_comment extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->get('comment');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
	public function getAllid($id){
		$this->db->select('*');
		$this->db->from('knowledge');
		$this->db->join('comment', 'comment.knowledgeID=knowledge.knowledgeID');
		$this->db->join('user', 'user.userID=comment.UserID');
		$this->db->where('comment.knowledgeID',$id);
		$this->db->order_by('knowledge.knowledgeID', 'asc');
		$hasil = $this->db->get();
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('comment', $data);
  }
  public function update($id, $data){
    $this->db->where('commentID',$id)->update('comment',$data);
  }
  public function delete($id){
    $this->db->where('commentID',$id)->delete('comment');
  }
  public function deleteKnow($id){
    $this->db->where('knowledgeID',$id)->delete('comment');
  }
  public function findDetail($id){
    $hasil = $this->db->where('commentID',$id)->limit(1)->get('comment');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
