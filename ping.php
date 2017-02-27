<?php

if(isset($_REQUEST['theaddr'])) {
	$addr = $_REQUEST['theaddr'];
	$amt = '4';
	$size = '3';
	echo "<head>
<title>
Pinging {$addr}
</title>
</head>
<body>
<h2 align=center>Ping Results</h2>".PHP_EOL;

	$cmd = "ping -c {$amt} -l {$size} -w 0 {$addr}";
	exec($cmd, $results);

	foreach($results as $result) {
		echo "{$result}<br />";
	}
} else {
	exit("theaddr not provided");
}
