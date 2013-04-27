<?php
class Diary extends CI_Controller {
	public function index(){
		$this->load->view('head');
		$this->load->database();
		//다이어리 목록 조회
		$this->load->model('diary_model');
		$list=$this->diary_model->getList();
		//맵핑할 태그 조회
		$tag_list=$this->diary_model->getTag();
		//var_dump($tag_list);
		$this->load->view('diary_view',array('list'=>$list,'tag_list'=>$tag_list));
		
		
	}
	public function write(){
		$this->load->view('head');
		$this->load->view('diary_write');
	}
	public function insert(){
		$this->load->database();
		$this->load->model('diary_model');
		$this->diary_model->insert();
		echo "<meta http-equiv=\"refresh\" content=\"0; url=/diary\">";
	}
}
?>