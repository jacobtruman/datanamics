<?php
$root = 'D:/inetpub/support';

mkdir($root."/support_web/1stlevel/HamptonInn/new/");
mkdir($root."/support_web/1stlevel/HamptonInn/new/pictures/");
mkdir($root."/support_web/2ndLevel/HamptonInn/new/");

$src_file = $root.'/support_web/TEMPLATE/map.php'; 
$dest_file = $root.'/support_web/1stlevel/HamptonInn/new/map.php'; 
if (!file_exists($dest_file)) {
	copy($src_file, $dest_file);
}

$src_file = $root.'/support_web/TEMPLATE/pictures/NetworkMap.png'; 
$dest_file = $root.'/support_web/1stlevel/HamptonInn/new/pictures/NetworkMap.png'; 
if (!file_exists($dest_file)) {
	copy($src_file, $dest_file);
}

$src_file = $root.'/support_web/TEMPLATE/map.php'; 
$dest_file = $root.'/support_web/2ndLevel/HamptonInn/new/map.php';
if (!file_exists($dest_file)) {
	copy($src_file, $dest_file);
}

?>