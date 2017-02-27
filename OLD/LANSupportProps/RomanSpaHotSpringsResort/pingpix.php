<?php

$addr = '76.246.21.121';
$amt = '4';
$size = '32';
?>
<head>
<title>
Pinging <?php echo $addr;?>
</title>
</head>
<body>
<h2 align=center>Ping Results</h2>
<?php

exec("ping -n $amt -l $size -w 0 $addr",$results);

$count=count($results);

for($i=0;$i<$count;$i++)
{
echo $results[$i].'<br>';
}
?>
