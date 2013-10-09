<?php
	/**
	 * 首页model
	 * @author	如水(www.Rushui.net)
	 */
	
	class Index_model extends CI_Model{
		  function __construct(){
			   parent::__construct();
		  }
			
		public function index_product() {
			$this->db->where(array('showindex' => 0 ))
				->get('product');
		}

		//所有数据块数据
		public function index_block(){
			$list=$this->db->get('block')->result();
			return $list;
		}

		//查询数据块单条数据
		public function index_blockfind($id){
			$find=$this->db->where(array('id'=>$id))
				->get('block')
				->result();
			return $find;
		}

		//查询网站配置信息
		public function index_config(){
			$list=$this->db->get('config')->result();
			return $list;
		}

		//友情链接
		public function index_link(){
			$list=$this->db->get('link')->result();
			return $list;
		}

		//首页产品
		public function index_pro(){
			$list=$this->db->get('product')->result();
			return $list;
		}
		//首页新闻
		public function index_news(){
			$list=$this->db->get('news')->result();
			return $list;
		}

	}