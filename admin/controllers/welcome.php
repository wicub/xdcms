<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admintree_model','admintree');
	}
	//管理首页
	public function index(){
		$this->load->view('index');
	}
	//top页
	public function top(){
		$toplist=array();
		$toplist=$this->admintree->top_menu();
		$data['toplist']=$toplist;
		$data['username']=$this->username;
		//var_dump($data);exit;
		$this->load->view('inc/top',$data);
	}
	//left页
	public function left($id){
		$leftlist=array();
		$alllist=array();
		$leftlist=$this->admintree->left_menu($id);
		$alllist=$this->admintree->all_menu();
		$data['leftlist']=$leftlist;
		$data['alllist']=$alllist;
		$this->load->view('inc/left',$data);
	}
	
	//主页面
	public function main(){
		$this->load->view('inc/main');
	}
	//页面正在制作中。。。
	public function a(){
		$this->load->view('inc/a');
	}

	//显示隐藏左侧栏按钮
	public function bar(){
		$this->load->view('inc/bar');
	}

	//后台分类树导航
	public function lefttree(){
		$this->load->view('inc/lefttree');
	}
	
	public function test(){
		echo ENVIRONMENT .'<br>';
		echo EXT .'<br>';
		echo FCPATH .'<br>';
		echo SELF .'<br>';
		echo BASEPATH .'<br>';
		echo APPPATH .'<br>';
		echo CI_VERSION .'<br>';
		echo FILE_READ_MODE .'<br>';
		echo FILE_WRITE_MODE .'<br>';
		echo DIR_READ_MODE .'<br>';
		echo DIR_WRITE_MODE .'<br>';
		echo FOPEN_READ .'<br>';
		echo FOPEN_READ_WRITE .'<br>';
		echo FOPEN_WRITE_CREATE_DESTRUCTIVE .'<br>';
		echo FOPEN_READ_WRITE_CREATE_DESTRUCTIVE .'<br>';
		echo FOPEN_WRITE_CREATE .'<br>';
		echo FOPEN_READ_WRITE_CREATE .'<br>';
		echo FOPEN_WRITE_CREATE_STRICT .'<br>';
		echo FOPEN_READ_WRITE_CREATE_STRICT .'<br>';
		echo site_url() .'<br>';
		echo base_url() .'<br>';
		echo current_url() .'<br>';
		echo uri_string() .'<br>';
		echo index_page() .'<br>';
		echo anchor() .'<br>';
		echo anchor_popup() .'<br>';
		echo dirname(base_url()).'/' .'<br>';


	}

}
