<?php
	/**
	 * 后台管理model类
	 * @author	如水(www.Rushui.net)
	 */

	class Admintree_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		//后台top部菜单
		public function top_menu(){
			$list=array();
			$list=$this->db->where(array('pid'=>0))
				->order_by('sortnum asc,id asc')
				->get('admintree')
				->result();
			return $list;
		}

		//后台left部菜单
		public function left_menu($pid){
			$list=array();
			$list=$this->db->where(array('pid'=>$pid))
				->order_by('sortnum asc,id asc')
				->get('admintree')
				->result();
			return $list;
		}

		//所有菜单
		public function all_menu(){
			$list=array();
			$list=$this->db->order_by('sortnum asc,id asc')
				->get('admintree')
				->result();
			return $list;
		}

		//所有菜单按concat(path,id)排序
		public function admintree(){
			$list=array();
			$list=$this->db->query('select * from rs_admintree order by concat(path,id)')
				->result();
			return $list;
		}

		//查询单个菜单
		public function find($id){
			$list=array();
			$list=$this->db->where(array('id'=>$id))
				->get('admintree')
				->row();
			return $list;
		}

		//添加菜单
		public function insert($data){
			//var_dump($data);exit;
			if($data['name']==''){
				return "名称不能为空";
			}
			if($data['otherurl']==''){
				return "链接地址不能为空";
			}
			$bool=$this->db->insert('admintree',$data);
			return $bool;
		}

		//修改
		public function update($data){
			//var_dump($data);exit;
			if($data['id']==''){
				return "非法操作";
			}
			if($data['name']==''){
				return "名称不能为空";
			}
			if($data['otherurl']==''){
				return "链接地址不能为空";
			}
			$bool=$this->db->where(array('id'=>$data['id']))
				->update('admintree',$data);
			return $bool;
		}

		//删除
		public function delete($id=''){
			if($id==''){
				return '非法操作';
			}
			//检查是否有子类
			$sub=$this->db->where(array('pid'=>$id))
				->get('admintree')
				->row();
			if(count($sub)>=1){
				return '请先删除子类！';
			}
			$bool=$this->db->delete('admintree',array('id'=>$id));
			return $bool;
		}

	}
