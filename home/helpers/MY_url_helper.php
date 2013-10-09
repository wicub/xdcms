<?php
	/**
	 * url函数扩展
	 * @author	如水(www.Rushui.net)
	 */

	//风格目录
	if ( ! function_exists('template_url')){
		function template_url(){
			return base_url().TEMPLATE;
		}
	}
