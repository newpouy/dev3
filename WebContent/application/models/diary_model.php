<?php
class Diary_model extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	public function getList(){
		$query="SELECT diaryID,content,DATE_FORMAT(regDate,'%Y년 %m월  %d') AS regDate,delYN FROM diary order by diaryID desc";
		return $this->db->query($query)->result_array();
	}
	public function getTag(){
		$query="select dt.diaryID,dt.tagID,tl.tagName from diary_tag dt,tag_list tl where dt.tagID=tl.tagID";
		return $this->db->query($query)->result_array();
	}
	public function getOneDiary($diaryID){
		$query="SELECT d.diaryID,d.content,d.regDate,dt.tagID FROM diary d,diary_tag dt WHERE d.diaryID=".$diaryID;
		return $oneDiary=$this->db->query($query)->result_array();
	}
	public function insert(){
		$content=$this->input->post('content');
		$tag=$this->input->post('tag');//입력받은 태그배열
		
		//일기를 입력하고 
		$query11="insert into diary(content,regDate,delYN) values('$content',now(),'N')";
		$result=$this->db->query($query11);
		//방금입력한 일기의 diaryID값을 가져온다.
		$query12="select max(diaryID) as diaryID from diary";
		$diaryID=$this->db->query($query12)->result_array();
		$diaryID=$diaryID[0]['diaryID'];
		//태그를 조회하여
		for ($i=0; $i < count($tag); $i++) { 
			$query21="select tagName from tag_list where tagName='$tag[$i]'";
			$existTag=$this->db->query($query21)->result_array();
			//echo '있는태그'.$existTag[$i]['tagName'].'<br/>';
			if(count($existTag)==0){//태그가 없으면
				//태그리스트에 추가하고
				$query22="insert into tag_list(tagName) values('$tag[$i]')";
				$insertTag=$this->db->query($query22);
				//echo '$$'.$insertTag.'<br/>';
			}
			//tagID값을 조회하여
			$query31="select tagID from tag_list where tagName='$tag[$i]'";
			$tagID=$this->db->query($query31)->result_array();
			$tagID=$tagID[0]['tagID'];
			//다이어리_태그에 추가
			$query31="insert into diary_tag values($diaryID,$tagID)";
			$this->db->query($query31);
		}
	}
	public function updateDiary($diaryID,$content){
		$query="update diary set content='$content' where diaryID='$diaryID'";
		return $this->db->query($query);
	}
}
?>