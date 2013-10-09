<?php
	class pic extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('pic_model','pic');
			$this->load->helper('url');
		}
		
		public function showindex($num=''){
			$this->load->library('pagination');
			//$a=$this->down->countnum();
			//echo $a;exit;
			$config['base_url']='/project/cmscode/admin/index.php/pic/showindex';
			$config['total_rows']=$this->pic->countnum(); //总数
			$config['per_page']=3; //每页显示数量
			$config['num_links']=3;//连接前后显示个数
			$config['prev_link']='上一页';			
			$config['next_link']='下一页';
			$config['first_link']='首页';
			$config['last_link']='末页';
			$config['full_tag_open']='<div class="pagination">';
			$config['full_tag_close']='</div>';
			
			$this->pagination->initialize($config);//配置分页
			
			
			$list=$this->pic->show('img',$config['per_page'],$num);
			
			//var_dump($list);exit;
			$data=array('list'=>$list);
			$this->load->view('content/pic',$data);
			
		}
		
		public function picform(){                
			$bool=$this->pic->addimgform();
						
			if($bool===true){
				
				redirect('pic/showindex');
			}else{
				
				redirect('pic/showindex');
			}
		}
         
		 
		public function edit(){
			
			$id=$this->uri->segment(3);
			$data['list']=$this->pic->showedit('img',$id);
			$this->load->view('content/editpic',$data);
			
		
		
		}
		
		public function updatepic(){
			$data=$_POST;
			$id=$_POST['id'];
			$bool=$this->pic->picupdate('img',$id,$data);
			if($bool===true){
				
				redirect('pic/showindex');
			}else{
				
				redirect('pic/showindex');
			}
		}
		
		public function delete(){
			$id=$this->uri->segment(3);
			$query=$this->pic->showedit('img',$id);
			$file=$query->imgurl;
			$delfile='../uploads/'.$file;
			//echo $delfile;exit;
			//echo $file;exit;
			$bool=$this->pic->picdelete($id,'img');
			//$file=$bool->imgurl;
			//echo $file;exit;
			if($bool===true){
				
				@unlink($delfile);
				redirect('pic/showindex');
			}else{
				
				redirect('pic/showindex');
			}
		}
		
		public function addpic(){
			$this->load->view('content/addpic');
		}
	}
		 

	