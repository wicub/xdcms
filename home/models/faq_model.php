<?php
	/**
	 * 数据块model类
	 * @author	如水(www.Rushui.net)
	 */
	
	class Faq_model extends CI_Model{
		public function __construct(){
			parent::__construct();
		}

		//所有数据块数据
		public function index(){
			$list=$this->db->get('faq')->result();
			return $list;
		}

		
	}