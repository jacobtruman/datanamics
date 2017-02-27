<?php
if ($active == 'Yes'){
	if (($status == 'Up') || ($status == '')){
		$udimg = '/support_web/images/greencheck.png';
		$chstatus = 'Down';
	}else{
		$udimg = '/support_web/images/redx.png';
		$chstatus = 'Up';
	}
}else{
	$udimg = '/support_web/images/greyx.png';
}
?>