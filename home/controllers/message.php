<?php
	
	class Message extends MY_Controller{
	
		public function index(){
			//分类页
			//数据库统计总条数
			$total_rows=$this->db->count_all('message');
			//var_dump($total_rows);exit;
			$this->load->library('pagination');	//导入分页类
			$url=site_url('message/index');
			$config['base_url'] = $url;			//导入分页类URL
			$config['total_rows'] = $total_rows;//数据的总数量
			$config['per_page'] = 2; 		//每页显示的记录数
			
			//去config/pagination.php去查看相应的$config设置;


   		    //$config['display_pages'] = FALSE;
   		   

			$this->pagination->initialize($config); //初始化分页类
			$this->load->model('Message_model','message');  

			$data['results']=$this->message->get_message($config['per_page'],$this->uri->segment(3)); 



			$data['page']=$this->pagination->create_links();
			//$this->table->set_heading('ID','Title','Content','Time'); //设置表头
  		   
			//var_dump($date);exit;
			$this->load->view('message/index',$data);
		}

		

		public function myAjax(){
			//ajax传送的数据
			//返回信息,ajax处理信息
				/* var_dump($_POST);
				array(7) {["ip"]=> string(9) "127.0.0.1"
						  ["title"]=>string(0) ""
						  ["username"]=>string(0) ""
						  ["tel"]=>string(0) ""
						  ["email"]=>string(0) ""
						  ["qq"]=>string(0) ""
						  ["content"]=> string(0) ""
						}*/
				$ctime=time();
				//对数据进行判断
				if(empty($_POST['title'])){
					echo '标题不能为空';
					return;
				}
				if(empty($_POST['username'])){
					echo '用户名不能为空';
					return;
				}
				if(empty($_POST['content'])){
					echo '内容不能为空';
					return;
				}
				
				//获取配置文件
				$str=file_get_contents(FCPATH .'inc/message.inc');
				$arr=unserialize($str);
				/*
				array(9) {
				  ["MessageRefreshTime"]=>   //防止刷新时间
				  string(3) "120"
				  ["MessageSpecialWord"]=>	//敏感字过滤,如果敏感字则不=保存到数据库
				  string(24) "操你妈|他妈的|Fuck"
				  ["MessageRevertAudit"]=>	//客户留言后需要在后台回复审核才显示
				  string(1) "1"
				  ["MessagePostEmail"]=>	//是否将客户留言自动发生到指定邮箱
				  string(1) "1"	
				  ["MessageAcceptEmailAddress"]=>
				  string(30) "3375074@qq.com|info@kuwebs.com"
				  ["MessageAutoRevert"]=>	//是否自动向提交反馈的客户回复邮件
				  string(1) "1"
				  ["MessageAutoRevertEmailAddress"]=>
				  string(15) "info@kuwebs.com"
				  ["MessageTitle"]=>
				  string(37) "您好，欢迎光顾webs官方网站"
				  ["MessageContent"]=>
				  string(121) "您好，你的邮件已被系统邮件接收，请等待工作人员处理<br>更多资讯请访问http://www.kuwebs.com"
				}
				*/
				//创建时间
				$_POST['ctime']=time();

				//根据配置,来选择是否审核受显示到页面,存入数据库
				$_POST['status']=$arr['MessageRevertAudit'];

				
				//敏感字过滤,用'|'隔开
				$str=$arr['MessageSpecialWord'];
				$sensitive=explode("|",$str);
				//var_dump($sensitive);exit;
				foreach($sensitive as $v){
					//进行正则匹配
					if(preg_match("/$v/",$_POST['content'])){
						
						echo '有敏感字,请重新输入内容';
						return;
					}
				}
				
				
				//根据状态,来发送电子邮件
				/*if($arr['MessagePostEmail'] == "1" ){
					//var_dump($_POST['title']);exit;
					
				       $mail_body = "落落長的內文";
				        $this->load->library('mailer');
				        $this->mailer->sendmail(
				            'it6780@qq.com',
				            'charles',
				            '這是測試信 '.date('Y-m-d H:i:s'),
				            $mail_body
				            );
		
				}*/


				
				//同一IP两次提交的最小间接时间*,根据IP地址去查询
				$query=$this->db->where('ip',$_POST['ip'])
								->order_by('id','desc')
								->get('message');
				$result=$query->row();
				//var_dump($result);exit;

				//var_dump($result->ip);exit;
				
				//获取放刷新时间,并进行验证
				
				$refreshTime=$result->ctime + $arr['MessageRefreshTime'];
				
				if($_POST['ctime'] < $refreshTime){

					echo '添加信息频繁,请稍候添加';
					return;
				}

				

				//如果IP为空或者符合上面的要求则插入,不需要验证
				
				$bool=$this->db->insert('message',$_POST);	
				
				if($bool){
					$insert_id=$this->db->insert_id();
					//echo $insret_id;exit;
					$query=$this->db->where('id',$insert_id)
									->get('message');
					$v=$query->row();	
					
					//echo $v->title;exit;
					
					
					echo "<dl class='blockCon6'>
								<dt>
								<span class='right'>
									<a href=''>查看详细</a></span>
									<a href=''> " .   $v->title  . " </a>
								  <p>留言者：" .    $v->username  . " &nbsp;&nbsp; 留言类别：在线留言&nbsp;&nbsp;留言时间：" .  date('Y-m-d H:i:s',$v->ctime + 8*60*60) . "&nbsp;&nbsp;</p>
								</dt>
							  <dd>
								  <p class='answer'> " .   $v->content . "</p>
								  <p class='reply'> " .   $v->recontent  . "</p>
							  </dd>
						  </dl>";
					
				
				}	
				
			}
		
		
		}