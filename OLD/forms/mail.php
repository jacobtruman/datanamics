<?php
$root = 'D:/inetpub/support';

include($root.'/support_web/components/dbcon.php');
$link2 = ado_connect( $dsn );

$sql2 = "SELECT * FROM prop WHERE (prop = '".$_POST['prop']."')";
//echo $sql;
$res2 = $link2->Execute($sql2);
$name = $res2->Fields['name']->Value;
$htype = $res2->Fields['htype']->Value;

ado_free_result( $res2 );
ado_close( $link2 );

ini_set ('SMTP', 'owa.datanamicsinc.com');
ini_set ('sendmail_from', 'jtruman@datanamicsinc.com');
ini_set ('display_errors', 'on');

$fromname = "SupportWeb";
$fromaddress = "zzAll-NetServices@datanamicsinc.com";
$toname = "zz All-Net Services";
$toaddress = "zzAll-NetServices@datanamicsinc.com";
//$toaddress = "jtruman@datanamicsinc.com";
$subject = "The ".$htype." ".$name." is ".$status;
$message = "The ".$htype." ".$name." is ".$status;
//echo $subject;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= "To: ".$toname."\r\n";
$headers .= "From: ".$fromname."\r\n";
//$headers .= "Cc: birthdayarchive@example.com" . "\r\n";
//$headers .= "Bcc: birthdaycheck@example.com" . "\r\n";

mail($toaddress, $subject, $message, $headers);
?>