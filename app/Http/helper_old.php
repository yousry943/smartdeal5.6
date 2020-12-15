<?php
if (!function_exists('helper_function_url')) {
	function helper_function_url($url = null){
		return url('admin/'.$url);
	}
}

///
if (!function_exists('helper_function_admin_guard')) {
	function helper_function_admin_guard(){
		return auth()->guard('admin');
	}
}





?>