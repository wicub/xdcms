<?php
	/**
	 * 自定义控制器（权限验证）
	 * @author	如水(www.Rushui.net)
	 */

	class MY_Controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$arr=$this->session->userdata('user');
			$this->username=$arr['username'];
			if($arr['username']==''){
				redirect('login');
			}
		}
	}