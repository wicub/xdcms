<?php
	/**
	 * 备份数据库
	 * @author	如水(www.Rushui.net)
	 */
	class Backup extends MY_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->dbutil();
			
		}

		public function index(){
			$msg='';

			if($_POST){
				$msg=$this->backup();
			}

			$list=$this->db->list_tables();
			$data['list']=$list;
			$data['msg']=$msg;
			//var_dump($data);
			$this->load->view('backup/index',$data);
		}

		public function backup(){

			// 备份整个数据库并将其赋值给一个变量
			$backup =& $this->dbutil->backup(); 
			// 加载文件辅助函数并将文件写入你的服务器
			$this->load->helper('file');
			write_file(FCPATH.'/back/mybackup.zip', $backup);
			return '备份成功 <a href="'.base_url().'/back/mybackup.zip">点击下载</a>';
		}

		public function downback(){
			// 加载下载辅助函数并将文件发送到你的桌面
			$this->load->helper('download');
			force_download('mybackup.zip', $backup); 
		}
	}