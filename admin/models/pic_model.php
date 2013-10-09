<?php
	class pic_model extends CI_Model{
		
		
		public function show($table,$page,$num){
			$query=$this->db->get($table,$page,$num)->result();
			return $query;
		}
		
		public function countnum(){
			$query=$this->db->count_all('img');
			return $query;
		}
		
				
		public function addimgform(){
			$data=$_POST;
			//var_dump($data);exit;
			$bool=$this->db->insert('img',$data);
			return $bool;
        }
		
		public function showedit($table,$id){
			$query=$this->db->where('id',$id)->get($table);
			return $query->row();
		}
		
		public function picupdate($table,$id,$data){
			
			$bool=$this->db->where('id',$id)->update($table,$data);
			return $bool;
			
		}
		
		public function picdelete($id,$table){
			$bool=$this->db->where('id',$id)->delete($table);
			return $bool;
		}
		
		
		
		
	}