<?php
	/**
	 * 常见问题控制器
	 * @author	如水(www.Rushui.net)
	 */

	class Faq extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('faq_model','faq');
			$this->load->model('category_model','category');
			//$this->output->enable_profiler(TRUE);//调试
		}

		//常见问题列表
		public function index(){
			//初始化变量
			$msg='';


			$data['msg']=$msg;
			$list=$this->faq->index();
			$data['list']=$list;
			//var_dump($list);
			$this->load->view('faq/index',$data);
		}

		//常见问题添加
		public function add($id=''){
			$msg='';

			//插入数据
			if($_POST){
				$msg=$this->faq->insert($_POST);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/faq">返回</a><script>djs("'.site_url().'/faq");</script>':$msg.'<script>djs();</script>';
			}
			$data['msg']=$msg;
			//echo $id;exit;
			$data['category']=$this->category->categorysub($id);
			$this->load->view('faq/add',$data);
		}

		//常见问题删除
		public function delete($id){
			$msg=$this->faq->delete($id);
			$msg=$msg==1?'删除成功！':$msg;
			echo "<script>alert('$msg');location.replace('".site_url()."/faq');</script>";
			return;
		}

		//常见问题修改
		public function edit ($id=''){
			$msg = '';

			//更新操作
			if($_POST){
				//var_dump($_POST);exit;
				$msg=$this->faq->update($_POST['id']);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/faq">返回</a><script>djs("'.site_url().'/faq");</script>':$msg.'<script>djs();</script>';
			}

			$row=$this->faq->find($id);
			$data['msg']=$msg;
			$data['faq']=$row[0];
			$data['category']=$this->category->categorysub($id=8);
			$this->load->view('faq/edit',$data);
		}

	}