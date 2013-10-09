<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	 * 后台登录
	 * @author	如水(www.Rushui.net)
	 */
	
	class Login extends CI_Controller {

		public function index(){
			$arr=$this->session->userdata('user');
			if($arr['username']){
				redirect('/welcome');
			}
			
			$this->load->view('login');
		}

		public function checklog(){
			$this->load->model('user_model','user');

			$msg=$this->user->checklog($_POST);
			//var_dump($this->session->userdata('user'));exit;
			if($msg!='登录成功'){
				echo $msg.'<a href="'.site_url().'">返回</a>';
			}
			$arr=$this->session->userdata('user');
			if($arr['username']){
				redirect('/welcome');
			}
			
		}
		public function out(){
			$this->session->unset_userdata(array('user'=>''));
			redirect('/welcome');
		}

	}
