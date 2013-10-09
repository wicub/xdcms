<?php
	/**
	 * 产品model类
	 * @author	如水(www.Rushui.net)
	 */

	class Product_model extends CI_Model{
		  function __construct(){
			   parent::__construct();
		  }
			
		public function index_product() {
			$this->db->where(array('showindex' => 0 ))
				->get('product');
		}


	}