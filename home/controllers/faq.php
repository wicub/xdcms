<?php
	/**
	 * 常见问题
	 * @author	如水(www.Rushui.net)
	 */

	class Faq extends CI_Controller{ 
		public function __construct(){
			parent::__construct();
			$this->load->model('index_model','index');
			$this->load->model('faq_model','faq');
		}

		public function index(){
			$list=$this->index->index_block();
			$conf=$this->index->index_config();
			$faq=$this->faq->index();
			$data['conf']=$conf[0];
			$data['about']=$list[0];
			$data['content']=$list[1];
			$data['faq']=$faq;
			//var_dump($faq);
			$this->load->view('faq',$data);
		}
	}