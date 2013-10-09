<?php
	/**
	 * 数据块控制器
	 * @author	如水(www.Rushui.net)
	 */

	class Block extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('block_model','block');
		}

		//数据块列表
		public function index(){
			//初始化变量
			$msg='';


			$data['msg']=$msg;
			$list=$this->block->index();
			$data['list']=$list;
			//var_dump($list);
			$this->load->view('block/index',$data);
		}

		//数据块添加
		public function add(){
			$msg='';

			//插入数据
			if($_POST){
				$msg=$this->block->insert($_POST);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/block">返回</a><script>djs("'.site_url().'/block");</script>':$msg.'<script>djs();</script>';
			}
			$data['msg']=$msg;

			$this->load->view('block/add',$data);
		}

		//数据块删除
		public function delete($id){
			$msg=$this->block->delete($id);
			$msg=$msg==1?'删除成功！':$msg;
			echo "<script>alert('$msg');location.replace('".site_url()."/block');</script>";
			return;
		}

		//数据块修改
		public function edit ($id=''){
			$msg = '';

			//更新操作
			if($_POST){
				//var_dump($_POST);exit;
				$msg=$this->block->update($_POST['id']);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/block">返回</a><script>djs("'.site_url().'/block");</script>':$msg.'<script>djs();</script>';
			}

			$row=$this->block->find($id);
			$data['msg']=$msg;
			$data['block']=$row[0];
			$this->load->view('block/edit',$data);
		}

	}