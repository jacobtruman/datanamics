<?php
	$pic = '/support_web/1stlevel/'.$loc.'/Pictures/NetworkMap.png';
	if (file_exists($root.$pic)){
		echo "<BR><img border='0' src='".$pic."' usemap='#FPMap0' border='0'>";
	}else{
		$pic = '/support_web/images/blank.png';
		echo "<BR><img border='0' src='".$pic."' border='0'>";
	}
?>