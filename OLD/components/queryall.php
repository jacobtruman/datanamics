<?php
$link = ado_connect( $dsn );

$sql = "SELECT * FROM prop where (prop = '".$prop."')";
$res = $link->Execute($sql);

$prop = $res->Fields['prop']->Value;

$gateway = $res->Fields['gateway']->Value;
$gateway2 = $res->Fields['gateway2']->Value;
$htype = $res->Fields['htype']->Value;
$name = $res->Fields['name']->Value;
$loc = $res->Fields['loc']->Value;
$fold = $res->Fields['fold']->Value;
$inst = $res->Fields['inst']->Value;
$lgn = $res->Fields['lgn']->Value;
$lgn2 = $res->Fields['lgn2']->Value;
$pswd = $res->Fields['pswd']->Value;
$pswd2 = $res->Fields['pswd2']->Value;
$dbname = $res->Fields['dbname']->Value;
$level1 = $res->Fields['level1']->Value;
$level2 = $res->Fields['level2']->Value;
$active = $res->Fields['active']->Value;
$notes = $res->Fields['notes']->Value;
$notes_level2 = $res->Fields['notes_level2']->Value;
$eqlgn = $res->Fields['eqlgn']->Value;
$eqpswd = $res->Fields['eqpswd']->Value;
$mdate = $res->Fields['mdate']->Value;
$proppw = $res->Fields['proppw']->Value;
$uptodate = $res->Fields['uptodate']->Value;
$spnote = $res->Fields['spnote']->Value;
$spnote2 = $res->Fields['spnote2']->Value;
$ddate = $res->Fields['ddate']->Value;
$status = $res->Fields['status']->Value;

ado_free_result( $res );
ado_close( $link );
?>