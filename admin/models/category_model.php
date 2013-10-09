<?php
	/**
	 * 网站栏目管理model类
	 * @author	如水(www.Rushui.net)
	 */

	class Category_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}
		
		//取出所有分类数据并排序
		public function category_all(){
			$list=array();
			$list=$this->db->order_by('sortnum')
				->get('category')->result();
			return $list;
		}

		//所有栏目按concat(path,id)排序
		public function category(){
			$list=array();
			$list=$this->db->query('select * from rs_category order by concat(path,id)')
				->result();
			return $list;
		}

		//查询子级栏目按concat(path,id)排序
		public function categorysub($pid){
			$list=array();
			$list=$this->db->query('select * from rs_category where pid='.$pid.' order by concat(path,id)')
				->result();
			return $list;
		}

		//查询单个菜单
		public function find($id){
			$list=array();
			$list=$this->db->where(array('id'=>$id))
				->get('category')
				->row();
			return $list;
		}

		//添加菜单
		public function insert($data){
			//var_dump($data);exit;
			if($data['name']==''){
				return "名称不能为空";
			}
			if($data['menumodule']==''){
				return "模块不能为空";
			}
			$bool=$this->db->insert('category',$data);
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
			if($data['menumodule']==''){
				return "模块不能为空";
			}
			$bool=$this->db->where(array('id'=>$data['id']))
				->update('category',$data);
			return $bool;
		}

		//删除
		public function delete($id=''){
			if($id==''){
				return '非法操作';
			}
			$bool=$this->db->delete('category',array('id'=>$id));
			return $bool;
		}

	}
