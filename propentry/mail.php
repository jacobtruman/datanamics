<?

ini_set ('SMTP', 'owa.datanamicsinc.com');
ini_set ('sendmail_from', 'prop_update@datanamicsinc.com');
//ini_set ('display_errors', 'on');

//Input values

//$fromname = "Property Update";
$fromname = "Property Update";
$fromaddress = "prop_update@datanamicsinc.com";
$toname = "SupportWeb Admin";
$toaddress = "mstewart@datanamicsinc.com, nbirdsall@datanamicsinc.com, mehines@datanamicsinc.com";
$subject = $prop." has been created by ".$_SESSION['a_lgn'];

$keys = array_keys($_POST);
for ($i = 0; $i < count($_POST); $i++){
	$message .= $keys[$i].": ";
	$message .= $_POST[$keys[$i]]."<br>";
}

//echo $subject." ".$message;

MAIL_NVLP($fromname, $fromaddress, $toname, $toaddress, $subject, $message);

//create sendmail function

function MAIL_NVLP($fromname, $fromaddress, $toname, $toaddress, $subject, $message)
{
   $headers  = "MIME-Version: 1.0\n";
   $headers .= "Content-type: text/html; charset=iso-8859-1\n";
   $headers .= "X-Priority: 3\n";
   $headers .= "X-MSMail-Priority: Normal\n";
   $headers .= "X-Mailer: php\n";
   $headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";
   return mail($toaddress, $subject, $message, $headers);
}

?>