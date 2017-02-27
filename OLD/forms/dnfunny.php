<center>
<?php
$i = 0;
$d = dir("//Lasdn-sd01\SupportWeb\Support_Web\dnfimages");

while (false !== ($entry = $d->read())) {
	if (($entry != '.') && ($entry != '..')){
		$funnyImages[$i++] = $entry;
	}
}
$d->close();

//$funnyImages = array('dynamos.jpg', 'godkills.jpg', 'pathetic.jpg', 'retarded.jpg');

for ($i = 0; $i < count($funnyImages); $i++){
	echo "<img src='/support_web/dnfimages/".$funnyImages[$i]."'><br><br>\n";
}

?>
</center>