<?php
	/**
	 * 友情链接model类
	 * @author	如水(www.Rushui.net)
	 */
	
	class Link_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		//所有友情链接数据
		public function index(){
			$list=$this->db->get('link')->result();
			return $list;
		}

		//查询友情链接单条数据
		public function find($id){
			$find=$this->db->where(array('id'=>$id))
				->get('link')
				->result();
			return $find;
		}

		//添加友情链接
		public function insert($data){
			//var_dump($data);exit;
			if($data['title']==''){
				return "名称不能为空";
			}

			$bool=$this->db->insert('link',$data);
			return $bool;
		}

		//删除友情链接
		public function delete($id=''){
			if($id==''){
				return '非法操作';
			}
			$bool=$this->db->delete('link',array('id'=>$id));
			return $bool;
		}

		//更新操作
		public function update($id=''){
			if($id==''){
				return '非法操作';
			}
			
			$bool=$this->db->where(array('id'=>$id))
				->update('link',$_POST);
			return $bool;
		}

	}
