<?php
	/**
	 * 友情链接控制器
	 * @author	如水(www.Rushui.net)
	 */

	class Link extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('link_model','link');
		}

		//数据块列表
		public function index(){
			//初始化变量
			$msg='';


			$data['msg']=$msg;
			$list=$this->link->index();
			$data['list']=$list;
			//var_dump($list);
			$this->load->view('link/index',$data);
		}

		//数据块添加
		public function add(){
			$msg='';

			//插入数据
			if($_POST){
				$msg=$this->link->insert($_POST);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/link">返回</a><script>djs("'.site_url().'/link");</script>':$msg.'<script>djs();</script>';
			}
			$data['msg']=$msg;

			$this->load->view('link/add',$data);
		}

		//数据块删除
		public function delete($id){
			$msg=$this->link->delete($id);
			$msg=$msg==1?'删除成功！':$msg;
			echo "<script>alert('$msg');location.replace('".site_url()."/link');</script>";
			return;
		}

		//数据块修改
		public function edit ($id=''){
			$msg = '';

			//更新操作
			if($_POST){
				//var_dump($_POST);exit;
				$msg=$this->link->update($_POST['id']);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/link">返回</a><script>djs("'.site_url().'/link");</script>':$msg.'<script>djs();</script>';
			}

			$row=$this->link->find($id);
			$data['msg']=$msg;
			$data['link']=$row[0];
			$this->load->view('link/edit',$data);
		}

	}