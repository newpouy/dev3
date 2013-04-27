<?php
class Dev3 extends CI_Controller {
	public function index(){
		$this->load->view('head.php');
		$this->load->view('main.php');
	}

	public function visit_rec($start_num){
		$this->load->database();
		$this->load->model('visit_rec_model');
		
		$total_row=$this->visit_rec_model->getTotalRow();
		$view_row=$this->visit_rec_model->getRows($start_num-1);
				
		$this->load->library('pagination');
		$config['base_url'] = 'http://localhost/dev3/visit_rec/';
		$config['total_rows'] = count($total_row);	
		$config['per_page'] = 5;
		$this->pagination->initialize($config);
		$page_link=$this->pagination->create_links();
		
		$this->load->view('head.php');
		$this->load->view('visit_rec_view.php',array('data'=>$view_row,'page_link'=>$page_link));
		
	}
	public function visit_rec_insert(){
		$this->load->database();
		$this->load->model('visit_rec_model');
		$result=$this->visit_rec_model->insert();
		echo "<meta http-equiv=\"refresh\" content=\"0; url=/dev3/visit_rec/1\">";
	}
	public function visit_rec_delete($recID){
		$this->load->database();
		$this->load->model('visit_rec_model');
		$result=$this->visit_rec_model->delete($recID);
		echo "<meta http-equiv=\"refresh\" content=\"0; url=/dev3/visit_rec/1\">";  
	}
}
?>