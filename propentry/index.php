<?php
$ptype = 'Property Entry';
$root = 'D:/inetpub/support';
include ($root.'/support_web/propentry/header.php');
?>
<center>
<HR>
<BR>
<BR>
<BR>
<font face='Times New Roman MT Extra Bold' size='5'>
	Property Entry Site
</font>
<BR>
<BR>
<?php
$prop = $_POST['prop'];
if (isset($prop)){
	$btitle = 'Enter Another Property';
}else{
	$btitle = 'Enter A Property';
}
if (isset($prop)){
	echo 'The property <B>'.$prop.'</B> has been submitted successfully.';
}
?>
<form method='POST' action='pindex.php'>
<input type='submit' value='<?php echo $btitle;?>' CLASS='formbutton'>
</form>
<BR>
<BR>
<BR>
<HR>
</center>
</BODY>
<?php
if (isset($prop)){
$link = ado_connect( $dsn );

$table = 'overview';
include ("insDB.php");

ado_free_result( $res );
ado_close( $link );
}
?>