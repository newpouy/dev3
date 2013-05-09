<?php
class Processingjs extends CI_Controller {
	public function examples($num){
		$this->load->view('head');
		$this->load->view('processingjs_view'.$num);
		$this->load->view('foot');
	}
	public function exercise1(){
		$this->load->view('head');
		$this->load->view('pjs_exer1_view');
		$this->load->view('foot');
	}
	public function ajax(){
		echo json_encode(array('result'=>true,'value'=>$_REQUEST['value']));
	}
}
?>
