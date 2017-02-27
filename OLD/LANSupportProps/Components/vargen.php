<?php
if (!empty($_POST)){
	$postkeys = array_keys($_POST);
	for ($i = 0; $i < count($_POST); $i++){
		$$postkeys[$i] = $_POST[$postkeys[$i]];
	}
}else if (!empty($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$varkeys = array_keys($vars);
	for ($i = 0; $i < count($varkeys); $i++){
		$$varkeys[$i] = $vars[$varkeys[$i]];
	}
}
?>