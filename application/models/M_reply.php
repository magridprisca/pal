<?php
class M_reply extends CI_Model{
	public function __construct(){
		$this->load->database();
	}

	public function getAll(){
		$hasil = $this->db->get('replydiscussion');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
	public function getAllid($id){
		$this->db->select('*');
		$this->db->from('discussion');
		$this->db->join('replydiscussion', 'replydiscussion.discusID=discussion.discussID');
		$this->db->join('user', 'user.userID=replydiscussion.UserID');
		$this->db->where('replydiscussion.discusID',$id);
		$this->db->order_by('discussion.discussID', 'asc');
		$hasil = $this->db->get();
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else {
			return array();
		}
	}
  public function create($data){
    $this->db->insert('replydiscussion', $data);
  }
  public function update($id, $data){
    $this->db->where('replyID',$id)->update('replydiscussion',$data);
  }
  public function delete($id){
    $this->db->where('replyID',$id)->delete('replydiscussion');
  }
  public function findDetail($id){
    $hasil = $this->db->where('replyID',$id)->limit(1)->get('replydiscussion');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else {
			return array();
		}
  }
}
?>
