<?php
class M_discussion extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$this->db->select('*');
		$this->db->from('discussion');
		$this->db->join('replydiscussion', 'replydiscussion.discusID=discussion.discussID');
		$this->db->join('user', 'user.userID=replydiscussion.UserID');
		$this->db->order_by('discussion.discussID', 'asc');
		$hasil = $this->db->get();
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}

	public function getList(){
		$hasil = $this->db->where('discussion.userID=user.userID')->get('discussion, user');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}

  public function create($data){
    $this->db->insert('discussion', $data);
  }
  public function update($id, $data){
    $this->db->where('discussionID',$id)->update('discussion',$data);
  }
  public function delete($id){
    $this->db->where('discussionID',$id)->delete('discussion');
  }
  public function findDetail($id){
    $hasil = $this->db->where('discussID',$id)->limit(1)->get('discussion');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
	public function getcountDiscussion($id){
		$this->db->select('COUNT(replydiscussion.replyID) AS total');
    $this->db->from('replydiscussion');
		$this->db->join('discussion', 'replydiscussion.discusID=discussion.discussID');
		$this->db->where('discusID', $id);
   	$getData = $this->db->get('');
  	if($getData->num_rows() > 0){
    	return $getData->row();
		}else{
			return null;
		}
	}
}
?>
