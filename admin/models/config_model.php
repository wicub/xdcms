<?php
	/**
	 * 网站配置model类
	 * @author	如水(www.Rushui.net)
	 */

	class Config_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		//读取配置表信息
		public function find($id=1){
			$row=$this->db->where(array('id'=>$id))
				->get('config')
				->row();
			return $row;
		}

		public function update($data){
			if($data['id']==''){
				return "非法操作";
			}
			if($data['title']==''){
				return "配置名称不能为空";
			}
			if($data['webname']==''){
				return "网站名称不能为空";
			}
			if($data['webskin']==''){
				return "网站风格不能为空";
			}
			$bool=$this->db->where(array('id'=>$data['id']))
				->update('config',$data);
			return $bool;
		}
	}