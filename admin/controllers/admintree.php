<?php
	/**
	 * 后台分类树
	 * @author	如水(www.Rushui.net)
	 */
	
	class Admintree extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('admintree_model','admintree');
		}

		//后台分类树
		public function index(){
			$admintree=array();
			$admintree=$this->admintree->admintree();
			//var_dump($admintree);exit;
			$data['list']=$admintree;
			$this->load->view('admintree/index',$data);
		}

		//添加后台分类页
		public function add($id=''){
			//变量初始化
			$msg='';
			$data['pid']=0;
			$data['count']=0;
			$data['path']='0,';
			$data['name']='顶级栏目';

			//插入数据
			if($_POST){
				$msg=$this->admintree->insert($_POST);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/admintree">返回</a><script>djs("'.site_url().'/admintree");</script>':$msg.'<script>djs();</script>';
			}
			$data['msg']=$msg;

			//获取父栏目数据
			if($id!=''){
				$row=$this->admintree->find($id);
				$data['pid']=$row->id;
				$data['path']=$row->path.$row->id.',';
				$data['name']=$row->name;
				$data['count']=substr_count($row->path,',')+1;
			}
			//var_dump($row);exit;
			
			$this->load->view('admintree/add',$data);
		}

		//修改后台分类
		public function edit($id){
			//变量初始化
			$msg='';
			$data['pid']=0;
			$data['count']=0;
			$data['path']='0,';
			$data['name']='顶级栏目';

			//更新操作
			if($_POST){
				$msg=$this->admintree->update($_POST);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/admintree">返回</a><script>djs("'.site_url().'/admintree");</script>':$msg.'<script>djs();</script>';
			}

			$data['msg']=$msg;

			$row=$this->admintree->find($id);
			$re=$this->admintree->find($row->pid);
			$data['row']=$row;
			if(count($re)>0){
				$data['name']=$re->name;
			}
			$data['count']=substr_count($row->path,',');
			$this->load->view('admintree/edit',$data);
		}

		public function delete($id){
			$msg=$this->admintree->delete($id);
			$msg=$msg==1?'删除成功！':$msg;
			echo "<script>alert('$msg');location.replace('".site_url()."/admintree');</script>";
			return;
		}
		
	}