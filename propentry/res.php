<?php
$page = $_POST['page'];
$ptype = $page.' Submitted Successfully';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/update/header.php');
$prop = $_POST['prop'];
?>

<HR>
<center>
	<input type='submit' name='submit' value='Click here to close the window' class='textbutton' style='color: #5f8ac5' onClick='window.close()'>
</center>
<HR>
</BODY>
<?php

$link = ado_connect( $dsn );

if($page == 'ISP Info'){
	$sql = "UPDATE isp SET isp_name = '".$_POST['isp_name']."', isp_number = '".$_POST['isp_number']."', isp_contact = '".$_POST['isp_contact']."', isp_hours = '".$_POST['isp_hours']."', isp_circuit = '".$_POST['isp_circuit']."' WHERE isp_name = '".$isp_name."'";
}
//echo $sql;
$res = $link->Execute($sql);

ado_free_result( $res );
ado_close( $link );
?>