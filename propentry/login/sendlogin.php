<HEAD>
	<Title>
		SupportWeb Password Retrieval
	</Title>
	<LINK Rel='stylesheet' Type='text/css' HREF='/support_web/swstyle.php'>
</HEAD>
<BR>
<BR>
<BR>
<BR>
<table width='30%' border='0' cellpadding='3' cellspacing='1' class='alldotted' align='center'>
	<tr>
		<td colspan='2' align='center'>
			<img src='/support_web/logos/Datanamics.png' border='0'>
		</td>
	</tr>
<?php
ini_set ('SMTP', 'owa.datanamicsinc.com');
ini_set ('sendmail_from', 'supportwebadmin@datanamicsinc.com');
//ini_set ('display_errors', 'on');
$root = 'D:/inetpub/support';
include_once($root.'/support_web/components/dbcon.php');
$db_name = "propinfo";
$tbl_name = "admin";

$sql = "SELECT count(a_pswd) AS cnt FROM [admin] WHERE a_lgn = '".$_POST['a_lgn']."'";
$link = ado_connect( $dsn , $dtype);

$res = $link->Execute($sql);

$cnt = $res->Fields['cnt']->Value;

ado_free_result( $res );
ado_close( $link );

$sql = "SELECT a_pswd FROM [admin] WHERE a_lgn = '".$_POST['a_lgn']."'";
$link = ado_connect( $dsn , $dtype);
$res = $link->Execute($sql);

if ($cnt > 0){
$a_pswd = $res->Fields['a_pswd']->Value;

ado_free_result( $res );
ado_close( $link );

//Input values
$fromname = "Support Web Request";
$fromaddress = "supportwebadmin@datanamicsinc.com";
$toaddress = $_POST['a_lgn']."@datanamicsinc.com";
$subject = "SUPPORT WEB PASSWORD FOR ".$_POST['a_lgn'];
$message = "Below are your login credentials for the Support Web Admin page.
<br>
<br>
	<b?Username:</b> ".$_POST['a_lgn']."
<br>
	<b>Password:</b> ".base64_decode($a_pswd);

MAIL_NVLP($fromname, $fromaddress, $toaddress, $subject, $message);

}else{

		echo "<tr>
			<td align='center'>
					<font face='verdana'>
						<br>
						".$_POST['a_lgn'].", Your account was not found - Contact your administrator
					</font>
			</td>
		</tr>\n";
}


function MAIL_NVLP($fromname, $fromaddress, $toaddress, $subject, $message){
	$headers  = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "X-Priority: 3\n";
	$headers .= "X-MSMail-Priority: Normal\n";
	$headers .= "X-Mailer: php\n";
	$headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";
	$headers .= 'Bcc: mstewart@datanamicsinc.com, jtruman@datanamicsinc.com' . "\r\n";
	echo "<tr>
		<td align='center'>
			<font face='verdana'>
				<br>
				An email has been sent to your <b>".$toaddress."</b> with your password. If problem persists consult your administrator.
			</font>
		</td>
	</tr>\n";
	return mail($toaddress, $subject, $message, $headers);
}

?>
</table>
<script>
setTimeout("window.close()", 10000);
</script> 