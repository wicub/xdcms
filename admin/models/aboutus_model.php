<?php
	class Aboutus_model extends CI_Model{
		
		public function __construct(){
			parent::__construct();
		}
	
		public function showindex(){
			$query=$this->db->get('about')->result();
			return $query;
			
		}
		
		public function showedit($table,$id){
			$query=$this->db->where('id',$id)->get($table);
			return $query->row();
		}
		public function aboutusupdate($table,$data,$id){
			$query=$this->db->where('id',$id)->update($table,$data);
			return $query;
		}
		
		
	}