<?php
session_start();
if(!session_is_registered("myusername")){
$url = 'main_login.php';
	if(headers_sent()) { 
    	echo "<script type='text/javascript'>location.href='".$url."';</script>"; 
	}else{
		header("location:".$url);
	}
}
?>

<html>
<body>
Login Successful

<a href='Logout.php'>Logout</a>
</body>
</html>
