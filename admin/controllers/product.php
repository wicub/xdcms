<?php
	class Product extends MY_Controller{

		//增加页面
		public function add(){
		
			$this->load->view('product/add');
		}
		//增加到数据库
		public function insert(){
			//进行判断
			if (empty($_POST['title'])) {
				echo "主题不能为空";
				return;
			}
			if (empty($_POST['imgurl'])) {
				echo "图片地址不能为空";
				return;
			}
			if (empty($_POST['content'])) {
				echo "内容不能为空";
				return;
			}
			
			//var_dump($_POST);EXIT;
			$bool=$this->db->insert('product',$_POST);
			if($bool){
				echo "添加成功";
				return;
			}
				
		}




		public function manage(){
			$query=$this->db->get('product');
			$result=$query->result();
			$data['result']=$result;

			$this->load->view('product/manage',$data);
		}

		public function thumbsite(){
		
			$this->load->view('product/thumbsite');
		}

		public function uploadify(){
			$path=FCPATH . '../upload/';
			//定义的上传目录
			$targetFolder = $path;
			$tempFile = $_FILES['Filedata']['tmp_name'];
			$fileTypes = array('jpg','jpeg','gif','png');
			//注意pathinfo()是一个数组,获得一个文件的extension(扩展名),dirname,basename
			$fileParts = pathinfo($_FILES['Filedata']['name']);

			//文件名
			$targetFile = uniqid().'.'.$fileParts['extension'];


			if(move_uploaded_file($tempFile,$targetFolder.$targetFile)){
			//if(move_uploaded_file($tempFile,$targetFolder.$targetFile)){
				$width=120;
				$height=120;
				$path=$targetFolder.$targetFile;
				$path2=$targetFolder.'thumb/'.'s'.$width.'_'.$targetFile;
					
				$this->thumbImages($path,$path2,$width,$height);
				$adress['path']=base_url() .'../upload/'  .$targetFile;;
				$adress['src']=base_url() .'../upload/' . 'thumb/'.'s'.$width.'_'.$targetFile;
				//header("Content-type:application/json;charset=utf-8");
				echo json_encode($adress);
				//var_dump($_FILES);
				
			} else {	
				echo 'Invalid file type.';
			}
		}

		
		//等比例的缩放图,设置一个宽就OK了.
		 private function thumbImages($path,$path2,$width=100,$height=100){
		 	$config['image_library'] = 'gd2';
			$config['source_image'] = $path;	//源文件地址
			$config['new_image']=$path2;		//新文件的地址
			//$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = $width;
			$config['height']=$height;
			

			$this->load->library('image_lib', $config); 

			 if(!$this->image_lib->resize()){

			 	echo $this->image_lib->display_errors();
			 }
		 }

		
	}

