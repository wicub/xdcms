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

		//添加数据块
		public function insert($data){
			//var_dump($data);exit;
			if($data['title']==''){
				return "名称不能为空";
			}

			$bool=$this->db->insert('block',$data);
			return $bool;
		}

		//删除数据块
		public function delete($id=''){
			if($id==''){
				return '非法操作';
			}
			$bool=$this->db->delete('block',array('id'=>$id));
			return $bool;
		}

		//更新操作
		public function update($id=''){
			if($id==''){
				return '非法操作';
			}
			
			$bool=$this->db->where(array('id'=>$id))
				->update('block',$_POST);
			return $bool;
		}

	}
