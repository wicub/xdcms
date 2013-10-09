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

	//网站根目录（此函数只用于后台定位前台目录）
	if ( ! function_exists('web_url')){
		function web_url(){
			return dirname(base_url());
		}
	}