<?php
	class News_model extends CI_Model{
		
		
		public function show($page,$num){
			$query=$this->db->get('news',$page,$num)->result();
			return $query;
		}
		
		public function countnum(){
			$query=$this->db->count_all('news');
			return $query;
		}
		
				
		public function insertdata(){
			$data=$_POST;
			//var_dump($data);exit;
			$bool=$this->db->insert('news',$data);
			return $bool;
        }
		
		public function showedit($id){
			$query=$this->db->where('id',$id)->get('news');
			return $query->row();
		}
		
		public function newsupdate(){
			$data=$_POST;
			$id=$_POST['id'];
			$bool=$this->db->where('id',$id)->update('news',$data);
			return $bool;
			
		}
		
		public function newsdelete($id){
			$bool=$this->db->where('id',$id)->delete('news');
			return $bool;
		}
		
		
		
		
	}