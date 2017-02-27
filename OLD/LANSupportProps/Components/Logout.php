<?php
session_start();
session_destroy();
$url = '/support_web/LANSupportProps/components/login.php';
   	echo "<script type='text/javascript'>location.href='".$url."';</script>"; 
?>