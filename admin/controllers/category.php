<?php
	/**
	 * 前台栏目管理
	 * @author	如水(www.Rushui.net)
	 */
	
	class Category extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('category_model','category');
			$this->navshow=array('都不显示','主导航栏','底部导航栏','都显示');
            $this->modelshow=array('关于我们','新闻','产品','图片','下载','招骋','在线留言','常见问题');
		}

		//前台所有分类
		public function index(){
			$category=array();
			$category=$this->category->category();
			//var_dump($category);exit;
			$data['list']=$category;
			$data['navshow']=$this->navshow;
			$data['modelshow']=$this->modelshow;
			$this->load->view('category/index',$data);
		}

		//添加后台分类页
		public function add($id=''){
			//变量初始化
			$msg='';
			$data['pid']=0;
			$data['count']=0;
			$data['path']='0,';
			$data['name']='顶级栏目';
			$data['navshow']=$this->navshow;
			$data['modelshow']=$this->modelshow;
			$data['selected']=0;
			$data['checked']=0;

			//插入数据
			if($_POST){
				$msg=$this->category->insert($_POST);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/category">返回</a><script>djs("'.site_url().'/category");</script>':$msg.'<script>djs();</script>';
			}
			$data['msg']=$msg;

			//获取父栏目数据
			if($id!=''){
				$row=$this->category->find($id);
				$data['pid']=$row->id;
				$data['path']=$row->path.$row->id.',';
				$data['name']=$row->name;
				$data['selected']=$row->menumodule;
				$data['count']=substr_count($row->path,',')+1;
			}
			//var_dump($row);exit;
			
			$this->load->view('category/add',$data);
		}

		//修改后台分类
		public function edit($id){
			//变量初始化
			$msg='';
			$data['pid']=0;
			$data['count']=0;
			$data['path']='0,';
			$data['name']='顶级栏目';
			$data['navshow']=$this->navshow;
			$data['modelshow']=$this->modelshow;

			//更新操作
			if($_POST){
				//var_dump($_POST);exit;
				$msg=$this->category->update($_POST);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/category">返回</a><script>djs("'.site_url().'/category");</script>':$msg.'<script>djs();</script>';
			}

			$data['msg']=$msg;

			$row=$this->category->find($id);
			$re=$this->category->find($row->pid);
			$data['row']=$row;
			if(count($re)>0){
				$data['name']=$re->name;
			}
			$data['count']=substr_count($row->path,',');
			$this->load->view('category/edit',$data);
		}

		public function delete($id){
			$msg=$this->category->delete($id);
			$msg=$msg==1?'删除成功！':$msg;
			echo "<script>alert('$msg');location.replace('".site_url()."/category');</script>";
			return;
		}
		
	}