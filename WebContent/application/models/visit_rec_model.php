<?php
class Visit_rec_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	public function getTotalRow(){
		$query='select recID,userID,msg,regDate from visit_rec order by recID desc';
		return $this->db->query($query)->result_array();
	}
	public function getRows($start_num){
		$query='select recID,userID,msg,regDate from visit_rec order by recID desc';		
		//다 긁어온 후 start_num부터 일부만 돌려준다
		$result=$this->db->query($query)->result_array();
		$this->load->helper('array');
		$view_row=elements(array(''.$start_num,''.$start_num+1,''.$start_num+2,''.$start_num+3,''.$start_num+4),$result);
		return $view_row;
	}
	public function insert(){
		$userID=$this->input->post('userID');
		$userPW=$this->input->post('userPW');
		$msg=$this->input->post('msg');
		$query="insert into visit_rec(userID,userPW,msg,regDate) values('$userID','$userPW','$msg',now())";
		return $this->db->query($query);
	}
	public function delete($recID){
		$query='delete from visit_rec where recID='.$recID;
		return $recID.'번은 삭제성공? '.$this->db->query($query);
	}
}
?>