<?php
class Processingjs extends CI_Controller {
	public function index(){
		$this->load->view('head');
		$this->load->view('processingjs_view');
		$this->load->view('foot');
	}
}
?>
