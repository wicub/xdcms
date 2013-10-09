<?php
	/**
	 * 数据块model类
	 * @author	如水(www.Rushui.net)
	 */
	
	class Block_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		//所有数据块数据
		public function index(){
			$list=$this->db->get('block')->result();
			return $list;
		}

		//查询数据块单条数据
		public function find($id){
			$find=$this->db->where(array('id'=>$id))
				->get('block')
				->result();
			return $find;
		}

		
	}