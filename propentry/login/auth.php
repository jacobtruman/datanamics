<?php
session_start ();
if (! session_is_registered ( "mysessionvariable" ) ) //if your variable isn't there, then the session must not be
{
session_unset (); //so lets destroy whatever session there was and bring them to login page
session_destroy ();
$url = "Location: index.php";
header ( $url );
}
else //otherwise, they can see the page
{
?>

Hi, you are in the session...

<?php
}
?>