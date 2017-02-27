<?php
function __autoload($class_name) {
	$found = false;
	$class_file = dirname(__FILE__). "/classes/{$class_name}.class.php";
	if(file_exists($class_file)) {
		$found = true;
	} else {
		$class_file = "/mine/phplib/{$class_name}.class.php";
		if(file_exists($class_file)) {
			$found = true;
		}
	}
	if($found) {
		require_once($class_file);
	}
}