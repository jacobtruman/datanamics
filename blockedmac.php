<HEAD>
<Title>
    Block MAC email page
</Title>
<LINK Rel='stylesheet' Type='text/css' HREF='style.css'>
</HEAD>
<?php
$root = 'D:/inetpub/support';
if (isset($_SERVER['QUERY_STRING'])){
	parse_str($_SERVER['QUERY_STRING'],$vars);
	$prop = $vars['prop'];
	$name = $vars['name'];
	$htype = $vars['htype'];
	$gateway = $vars['gateway'];
}else if (isset($_POST['prop'])){
	$prop = $_POST['prop'];
	$name = $_POST['name'];
	$htype = $_POST['htype'];
	$gateway = $_POST['gateway'];
	$message = $_POST['message'];
	$mac = $_POST['mac'];
}
echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>
	<input type='hidden' name='prop' value='".$prop."'>
	<input type='hidden' name='htype' value='".$htype."'>
	<input type='hidden' name='name' value='".$name."'>
	<input type='hidden' name='gateway' value='".$gateway."'>
	<font size='1' face='Verdana'>
		Message
		<BR>
		<input type='message' name='message' value='".$message."' class='formfield'><BR>
		MAC Address
		<BR>
	</font>
	<input type='text' name='mac' value='".$mac."' size='20' class='formfield'><BR>
	<input type='submit' Name='submit' value='Block MAC' class='formbutton'>
</form>\n";

if ($_POST['mac'] != ''){
	$mac = $_POST['mac'];
	$gateway = $_POST['gateway'];
	$prop = $_POST['prop'];
	$htype = $_POST['htype'];
	$name = $_POST['name'];
	$message = $_POST['message'];
	//Set needed values in ini file
	ini_set ('SMTP', 'owa.datanamicsinc.com');
	ini_set ('sendmail_from', 'zzAll-NetServices@datanamicsinc.com');
	ini_set ('display_errors', 'on');

	//Input values

	$fromname = "Blocked Mac";
	$fromaddress = "zzAll-NetServices@datanamicsinc.com";
	$toname = "zz All-Net Services";
	$toaddress = "zzAll-NetServices@datanamicsinc.com";
	$subject = "Blocked MAC - ".$mac." @ ".$htype." ".$name;

//	echo $subject;

	echo "<iframe src='http://".$gateway."/config/macFiltering.htm?WINDWEB_URL=%2Ffs%2Fconfig%2FmacFiltering.htm&ndxMacFilteringOn=1&ndxMacfilterAddr=".$mac."&ndxMacFilteringAction=1&usg_save_to_flash=0' width='0' height='0'></iframe>\n";

	MAIL_NVLP($fromname, $fromaddress, $toname, $toaddress, $subject, $message);
}

function MAIL_NVLP($fromname, $fromaddress, $toname, $toaddress, $subject, $message)
{
   $headers  = "MIME-Version: 1.0\n";
   $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
   $headers .= "X-Priority: 3\n";
   $headers .= "X-MSMail-Priority: Normal\n";
   $headers .= "X-Mailer: php\n";
   $headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";
   return mail($toaddress, $subject, $message, $headers);
}
?>