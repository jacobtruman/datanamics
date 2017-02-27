<?
ini_set ('SMTP', 'owa.datanamicsinc.com');
ini_set ('sendmail_from', 'supportweb@datanamicsinc.com');
//ini_set ('display_errors', 'on');

//Input values

$fromname = "Support Web Request";
$fromaddress = "supportweb@datanamicsinc.com";
$toaddress = "zzAllNetServicesManagement@datanamicsinc.com, ".$_POST['name']."@datanamicsinc.com, nbirdsall@datanamicsinc.com, mstewart@datanamicsinc.com";
$subject = "SUPPORT WEB UPDATE ".$_POST['pname'];
$message = "<b>Prepared by:</b> ".$_POST['name']."<br><b>Problem Area:</b> ".$_POST['area']."<br><br><b>Problem:</b> ".nl2br($_POST['problem']);
MAIL_NVLP($fromname, $fromaddress, $toaddress, $subject, $message);

//create sendmail function

function MAIL_NVLP($fromname, $fromaddress, $toaddress, $subject, $message)
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