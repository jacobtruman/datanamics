<font face='verdana' size='1'>
Page last modified: 
</font>
<font face='verdana' size='1' color='FF0000'>
<?
$file = $root.'/support_web/LANSupportProps/'.$loc.'/Pictures/NetworkMap.png';
//$lastmod = date("m/d/Y H:i", getlastmod($file));
if (!file_exists($file)){
	$file = $root.'/support_web/images/blank.png';
}
$lastmod = date("m/d/Y H:i", filemtime($file));
echo $lastmod;
?> 
</font>