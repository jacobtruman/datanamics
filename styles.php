<?php
$image_dir = "images/logos";
// default image
$dn_logo = "{$image_dir}/Datanamics.png";
// default class suffix to null
$style_class_suffix = null;

$today = getdate();
if($today['mon'] >= 11) {
	// include('components/snow.php');;
	if(($today['mon'] == 12) && (($today['mday'] >= 12) && ($today['mday'] <= 25))) {
		$logo_suffix = "Christmas";
	} else {
		$logo_suffix = "Winter";
	}
} elseif(($today['mon'] == 11) && ($today['mday'] <= 24)) {
	$logo_suffix = "Thanksgiving";
} elseif(($today['mon'] == 2) && ($today['mday'] <= 14)) {
	$logo_suffix = "Vday";
} elseif(($today['mon'] == 3) && ($today['mday'] <= 17)) {
	$logo_suffix = "StPatricks";
} elseif(($today['mon'] == 10) && (($today['mday'] >= 1) && ($today['mday'] <= 31))) {
	if(($today['hours'] >= 8) && ($today['hours'] <= 20)) {
		$logo_suffix = "HalloweenNighttime";
	} else {
		$logo_suffix = "HalloweenDaytime";
	}
} elseif(($today['mon'] == 7) && ($today['mday'] == 4)) {
	$logo_suffix = "July4";
} else {
	$logo_suffix = "";
}

if(isset($logo_suffix)) {
	$style_class_suffix = "-".strtolower($logo_suffix);
	$logo_suffix = str_replace(array("Daytime", "Nighttime"), "", $logo_suffix);
	$images = glob("{$image_dir}/Datanamics{$logo_suffix}*");
	if(count($images) > 0) {
		$dn_logo = $images[array_rand($images)];
	}
}
