<?php

	/**
	 * 后台网站配置控制器
	 * @author	如水(www.Rushui.net)
	 */

	class Conf extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('config_model','con');
			$this->navshow=array('都不显示','主导航栏','底部导航栏','都显示');
            $this->modelshow=array('关于我们','新闻','产品','图片','下载','招骋','在线留言','常见问题');
		}

		public function index(){
			//初始化变量
			$msg='';

			//更新操作
			if($_POST){
				$msg=$this->con->update($_POST);
				$msg=$msg==1?'操作成功！<a href="'.site_url().'/conf">返回</a><script>djs("'.site_url().'/conf");</script>':$msg.'<script>djs();</script>';
			}

			$data['msg']=$msg;
			$row=$this->con->find();
			$data['row']=$row;
			$this->load->view('config/index',$data);
		}

	}