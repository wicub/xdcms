<?php
	class Message_model extends CI_Model{
		  function __construct(){
			   parent::__construct();
		  }
			
		public function get_message($n,$o) {

			if($o==''){$o=0;}
				$result = $this->db->query ( "select * from rs_message order by id desc limit $o,$n"  );
				$re = $result->result ();
				return $re;
			}


	}