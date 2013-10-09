<?php
	/**
	 * 常见问题model类
	 * @author	如水(www.Rushui.net)
	 */
	
	class Faq_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		//所有常见问题数据
		public function index(){
			$list=$this->db->get('faq')->result();
			return $list;
		}

		//查询常见问题单条数据
		public function find($id){
			$find=$this->db->where(array('id'=>$id))
				->get('faq')
				->result();
			return $find;
		}

		//添加常见问题
		public function insert($data){
			//var_dump($data);exit;
			if($data['title']==''){
				return "名称不能为空";
			}

			$bool=$this->db->insert('faq',$data);
			return $bool;
		}

		//删除常见问题
		public function delete($id=''){
			if($id==''){
				return '非法操作';
			}
			$bool=$this->db->delete('faq',array('id'=>$id));
			return $bool;
		}

		//更新操作
		public function update($id=''){
			if($id==''){
				return '非法操作';
			}
			
			$bool=$this->db->where(array('id'=>$id))
				->update('faq',$_POST);
			return $bool;
		}

	}
