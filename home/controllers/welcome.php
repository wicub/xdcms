<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('index_model','index');
	}

	public function index(){
		$list=$this->index->index_block();
		$product=$this->index->index_product();
		$conf=$this->index->index_config();
		$link=$this->index->index_link();
		$pro=$this->index->index_pro();
		$news=$this->index->index_news();
		$data['conf']=$conf[0];
		$data['about']=$list[0];
		$data['content']=$list[1];
		$data['pro']=$pro;
		$data['news']=$news;
		$data['link']=$link;
		//var_dump($pro);exit;
		$this->load->view('index',$data);
	}


}
