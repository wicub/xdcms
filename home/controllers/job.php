<?php 
	class Job extends MY_Controller{
	
		public function index(){
			
			
			//1.数据库统计总条数
			$data['totle']=$this->db->count_all('job');
			//2.每页显示的数量
			$data['num']=2;
			//3.计算一用有多少页
			$data['page_max']=ceil($data['totle']/$data['num']);
			
			$this->load->view('job/index',$data);
		}
		
		
		public function myajax(){
			//分类页的内容
			
			$page=$this->uri->segment(3);

			//var_dump($page);exit;
			if(empty($page)){
				$page=0;
			}
			$page=intval($page);
			//1.数据库统计总条数
			$totle=$this->db->count_all('job');
			//2.每页显示的数量
			$num=2;
			//3.计算一用有多少页
			$page_max=ceil($totle/$num);
			//var_dump($page_max);exit;
			//4.定义这是第几页$page;
			
			$page=min($page,$page_max); //防止点下一页,超过最大值
			$page=max($page,1);	
			//echo $page;exit;
			//5.计算位移量,当前页显示
			$offset=($page-1) * $num;  
			//6.拼接limit语句
			//$limit=" limit $offset,$num";
			
			$query=$this->db->limit($num,$offset)
							 ->get('job');
			
			$result=$query->result();
			//var_dump($result);exit;	
			foreach($result as $v){

			echo 	"<li>
						<span class='j1'>
								<a href=''>". $v->title ."</a>
						</span>
						<span class='j2'>".$v->num."</span>
						<span class='j3'>".$v->addr."</span>
						<span class='j4'>
							<a href=''>查看详细</a>
						</span>
						
					</li> ";
			/*
			<li>
				<span class="j1">
					<a href="">客服专员</a>
				</span>
				<span class="j2">不限</span>
				<span class="j3">深圳</span>
				<span class="j4">
					<a href="">查看详细</a>
				</span>
				<span class="j5">
					<a href="">在线应聘</a>
				</span>
			</li>
             */           
                      

			}	

		}

	}