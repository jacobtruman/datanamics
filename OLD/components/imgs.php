<?php
if (isset($htype)){
	$img = eregi_replace(' ', '', $htype).'.png';
	if (!file_exists($root."/support_web/logos/".$img)){
		$img = 'na.png';
	}
}
?>