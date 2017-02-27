<?php

if ($htype == 'Holiday Inn Express'){
	$flink = 'Holiday Inn HSIA';
}elseif ($htype == 'Hampton Inn & Suites'){
	$flink = 'Hampton Inn HSIA';
}elseif ($htype == 'Holiday Inn Select'){
	$flink = 'Holiday Inn HSIA';
}elseif ($htype == 'Hilton Suites'){
	$flink = 'Hilton HSIA';
}elseif ($htype == 'Hilton Garden Inn'){
	$flink = 'Hilton HSIA';
}elseif (($htype == 'Fairfield Inn') || ($htype == 'SpringHill Suites') || ($htype == 'TownePlace Suites')){
	$flink = 'Marriott Hotels HSIA';
}elseif ($htype == 'Sheraton Four Points'){
	$flink = 'Starwood Hotels HSIA';
}elseif ($htype == 'Homestead Suites'){
	$flink = 'CNR Customers';
}elseif ($htype == 'Westin'){
	$flink = 'Westin Kierland Resort';
}elseif ($htype == 'Comfort Inn'){
	$flink = 'Choice Hotels HSIA';
}elseif ($htype == 'Comfort Suites'){
	$flink = 'Choice Hotels HSIA';
}elseif ($htype == 'Conrad'){
	$flink = 'Hilton HSIA';
}elseif ($htype == 'Courtyard Marriott'){
	$flink = 'AIC';
}elseif ($htype == 'Leisure Hotel'){
	$flink = 'Pratt Leisure Hotels';
}elseif ($htype == 'Super 8'){
	$flink = 'Super 8 Motel';
}elseif ($htype == 'Thunderbird'){
	$flink = 'Doubletree HSIA';
}elseif ($htype == 'Hotel Grand'){
	$flink = 'Hotel Grand';
}elseif ($htype == 'Cypress Gardens Inn'){
	$flink = 'Cypress Garden Inn';
}elseif ($htype == 'Applebees'){
	$flink = 'Applebees Restaurant Hot Spot Locations';
}elseif ($htype == 'Ramada Limited'){
	$flink = 'Ramada Inn';
}elseif (($htype == 'Walnut Knolls') || ($htype == 'Hawthorn Suites') || ($htype == 'KCI Expo Center') || ($htype == 'Candlewood Suites') || ($htype == 'Red Lion') || ($htype == 'Casa Linda Inn') || ($htype == 'Ramada Inn') || ($htype == 'Days Inn') || ($htype == 'Quality Inn') || ($htype == 'Guest House International') || ($htype == 'Howard Johnson Inn') || ($htype == 'Windemere Hotel') || ($htype == 'Brookwood Inn') || ($htype == 'Radisson') || ($htype == 'Best Western')){
	$flink = $htype;
}else{
	$flink = $htype.' HSIA';
}
if (($htype == 'Biltmore') || ($htype == 'Terraces') || ($htype == 'Willow Valley') || ($htype == 'University Towers') || ($htype == 'Plaza Apartments') || ($htype == 'Wyndham Garden') || ($htype == 'Hunters Ridge') || ($htype == 'Forest Hills') || ($htype == 'Heathman Lodge') || ($htype == 'Schweitzer') || ($htype == 'Pacific Inn') || ($htype == 'Safeway Hotspot') || ($htype == 'Colony Woods Apartments') || ($htype == 'Metropolitan') || ($fold == 'Change Alley Hotspot') || ($htype == 'The Platinum') || ($htype == 'The Lodge')){
	$thelink = $fold;
}else{
	$thelink = $flink."/".$fold;
}
?>