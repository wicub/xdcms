<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 文件上传控制器
 * @author	如水(www.Rushui.net)
 */

class Upload extends MY_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper(array('form'));
	}
 
	function index($f_id='imgurl',$f_type='photo'){
		//$f_id 父类input的id,$f_type上传文件的类型
		$data['f_id']=$f_id;
		$data['f_type']=$f_type;
		$data['error']='';
		$this->load->view('upload/upload_form',$data);
	}

	function do_upload(){

		$data['f_id']=$_POST['f_id'];
		$data['f_type']=$_POST['f_type'];

		//上传的文件类型
		if($data['f_type']=='all'){
			$file_type='gif|jpg|png|doc|rar|zip|';
		}elseif($data['f_type']=='photo'){
			$file_type='gif|jpg|png';
		}else{
			$file_type='';
		}
		

		$config['file_name'] = time();
		$config['upload_path'] = WEBPATH.'uploads/';
		$config['allowed_types'] = $file_type;
		$config['max_size'] = '5000';
		$config['max_width']  = '0';
		$config['max_height']  = '0';
	  
	  	$this->load->library('upload', $config);
	 
		if ( ! $this->upload->do_upload()){
			$data['error'] = true;
			$this->load->view('upload/upload_form', $data);
		}else{
			$data['upload_data']=$this->upload->data();
			//var_dump($data);exit;
			$this->load->view('upload/upload_success', $data);
		}
	} 
}
