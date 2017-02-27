<?php
session_start();
session_destroy();
$url = '/support_web/propentry/login/login.php';
   	echo "<script type='text/javascript'>location.href='".$url."';</script>"; 
?>