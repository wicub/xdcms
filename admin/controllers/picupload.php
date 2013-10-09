<?php
class picupload extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		 $this->load->helper(array('form', 'url'));

	}
 
	function index(){ 
	  $this->load->view('picupload/form', array('error' => '' ));
	}

	function do_upload(){
		//配置参数

		$config['file_name'] = time();
		$config['upload_path'] = '../uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
	  
	  	$this->load->library('upload', $config);
	 
		if ( ! $this->upload->do_upload()){
			$error = array('error' => '');
			$this->load->view('picupload/form', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('picupload/ok', $data);
			
		}
	} 
}
