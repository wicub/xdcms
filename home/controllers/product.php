<?php
	class product extends MY_Controller{ 

		public function index(){
			

			//1.数据库统计总条数
			$data['totle']=$this->db->count_all('product');
			//2.每页显示的数量
			$data['num']=2;
			//3.计算一用有多少页
			$data['page_max']=ceil($data['totle']/$data['num']);

			$this->load->view('product/index',$data);
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
			$totle=$this->db->count_all('product');
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
							 ->get('product');
			
			$result=$query->result();
			//var_dump($result);exit;	
			foreach($result as $v){

	echo 	"<dl class='blockCon1'>
     			<dt>
         			 <a href=''><img src=". $v->imgurlpre ."  width='180' height='120'></a>
     			</dt>
     			 <dd>
         			 <span class='title'><a href=''>". $v->title ."</a></span>
     	 		</dd>
 			 </dl>

 			 ";
 	 

			}	

		}

	}