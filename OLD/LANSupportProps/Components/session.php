<?php
session_start();
if(!session_is_registered("myusername")){
$pass = $_SERVER['SCRIPT_NAME']."?".$_SERVER['QUERY_STRING'];
$url = '/support_web/LANSupportProps/components/login.php?pass='.$pass;
    echo "<script type='text/javascript'>location.href='".$url."';</script>"; 
}
?>