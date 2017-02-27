<?php
$page = $_POST['page'];
$ptype = 'ISP Info '.ucfirst($page).'ed Successfully';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/update/header.php');
?>

<HR>
<center>
	<input type='submit' name='submit' value='Click here to close the window' class='textbutton' style='color: #5f8ac5' onClick='window.close()'>
</center>
<HR>
</BODY>
<?php
$isp_name = $_POST['isp_name'];
$link = ado_connect( $dsn );

if($page == 'create'){
	$sql = "INSERT INTO isp (isp_name, isp_number, isp_contact, isp_hours, isp_notes, mdate) VALUES ('".$isp_name."', '".$_POST['isp_number']."', '".$_POST['isp_contact']."', '".$_POST['isp_hours']."', '".$_POST['isp_notes']."', '".$_POST['mdate']."')";
}else{
	$sql = "UPDATE isp SET isp_name = '".$isp_name."', isp_number = '".$_POST['isp_number']."', isp_contact = '".$_POST['isp_contact']."', isp_hours = '".$_POST['isp_hours']."', isp_notes = '".$_POST['isp_notes']."', mdate = '".$_POST['mdate']."' WHERE isp_name = '".$isp_name."'";
}
//echo $sql;
$res = $link->Execute($sql);

ado_free_result( $res );
ado_close( $link );
?>
<script>
setTimeout("window.close()", 1000);
</script>