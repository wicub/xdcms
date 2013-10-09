<?php
class Fileupload extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		 $this->load->helper(array('form', 'url'));

	}
 
	function index(){ 
	  $this->load->view('fileupload/form', array('error' => '' ));
	}

	function do_upload(){
		//配置参数

		$config['file_name'] = time();
		$config['upload_path'] = '../uploads/';
		$config['allowed_types'] = 'rar|doc|xls|pdf|zip';
		$config['max_size'] = '10000';
		$config['max_width']  = '';
		$config['max_height']  = '';
	  
	  	$this->load->library('upload', $config);
	 
		if ( ! $this->upload->do_upload()){
			$error = array('error' => '');
			$this->load->view('fileupload/form', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('fileupload/ok', $data);
			
		}
	} 
}
