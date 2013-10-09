<?php
	class Job extends CI_Controller{


		//增加页面
		public function add(){
		
			$this->load->view('job/add');
		}
		//增加到数据库
		public function insert(){
			//var_dump($_POST);exit;
			//进行判断
			if (empty($_POST['title'])) {
				echo "标题不能为空";
				return;
			}
			if (empty($_POST['depart'])) {
				echo "招聘部门不能为空";
				return;
			}
			if (empty($_POST['post'])) {
				echo "工作岗位不能为空";
				return;
			}
			if (empty($_POST['content'])) {
				echo "内容不能为空";
				return;
			}
			
			//var_dump($_POST);EXIT;
			$bool=$this->db->insert('job',$_POST);
			if($bool){
				echo "添加成功";
				return;
			}
				
		}

		public function manage(){
			$query=$this->db->order_by('id','desc')
							->get('job');
			$data['result']=$query->result();
			
			//var_dump($data);exit;
			$this->load->view('job/manage',$data);
			
		}

	}