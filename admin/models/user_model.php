<?php
	/**
	 * 用户model类
	 * @author	如水(www.Rushui.net)
	 */

	class User_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		//登录验证
		public function checklog($arr=array()){
			session_start(); 
			//$dcode=$arr['dcode'];
			//echo $_SESSION['an'];
			//var_dump($arr);exit;
			if(count($arr)<3){
				return '信息填写不完整！';
			}
			if(strtoupper($arr['dcode']) != strtoupper($_SESSION['an'])){
				return '验证码不正确！';
			}

			$this->db->where('name',$arr['dname']);
			$list=$this->db->get('admin')->row_array();
			//var_dump($list);exit;
			if(count($list)<2){
				return '用户名不存在';
			}
			//echo $arr['password'];exit;
			if($list['password']!=md5($arr['dpass'])){
				return '密码不正确';
			}
			$arr= array('user'=>array('username'=>$list['name'],'email'=>$list['email']));
			//var_dump($arr);exit;
			$this->session->set_userdata($arr);
			return '登录成功';
		}
	}
