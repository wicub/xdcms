<?php
	class Message extends MY_Controller{


		public function online(){

			$this->load->view('message/online');

		}

		public function site(){

			$this->load->view('message/site');

		}
		

		public function adminajax(){
			//var_dump($_POST);
			//echo FCPATH . "../inc/message.inc";
			file_put_contents(FCPATH . "../inc/message.inc",serialize($_POST));
			echo 1;
		}

	}