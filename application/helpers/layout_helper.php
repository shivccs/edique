<?php
if(! function_exists("viewload")) {
	function viewload($viewdirname,$data){
		$CI = get_instance();
		//$CI->load->view('layouts/header',$data);
		//$CI->load->view('layouts/nav',$data);
		$CI->load->view($viewdirname,$data);
		//$CI->load->view('layouts/footer',$data);
	}

}
