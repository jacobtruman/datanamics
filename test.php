<?php
require_once("conifg.php");

$db = new DBConn("datanamics");

$sql = "SELECT * FROM property";

$res = $db->query($sql);

/*
+-----------------+--------------+------+-----+---------+-------+
| Field           | Type         | Null | Key | Default | Extra |
+-----------------+--------------+------+-----+---------+-------+
| prop            | varchar(20)  | NO   | PRI | NULL    |       |
| name            | varchar(100) | NO   | PRI | NULL    |       |
| type            | varchar(100) | YES  |     | 0       |       |
| model           | varchar(50)  | YES  |     | NULL    |       |
| version         | varchar(100) | YES  |     | NULL    |       |
| id              | varchar(25)  | YES  |     | NULL    |       |
| serial          | varchar(50)  | YES  |     | NULL    |       |
| ip              | varchar(100) | YES  |     | NULL    |       |
| inst_date       | varchar(100) | YES  |     | NULL    |       |
| mod_date        | varchar(100) | YES  |     | NULL    |       |
| con_to          | varchar(100) | YES  |     | NULL    |       |
| con_port        | int(11)      | YES  |     | NULL    |       |
| connection_type | varchar(100) | YES  |     | NULL    |       |
| username        | varchar(100) | YES  |     | NULL    |       |
| password        | varchar(100) | YES  |     | NULL    |       |
| port            | varchar(100) | YES  |     | NULL    |       |
| supported       | tinyint(1)   | YES  |     | 0       |       |
| status          | tinyint(1)   | YES  |     | 1       |       |
| notes           | text         | YES  |     | NULL    |       |
| gateway         | tinyint(100) | YES  |     | NULL    |       |
| coords          | varchar(100) | YES  |     | NULL    |       |
+-----------------+--------------+------+-----+---------+-------+
 */
$queries = array();
if($res->num_rows) {
	foreach($res as $record) {
		if(!empty($record['rtr'])) {
			#echo "{$record['rtrsup']} :: {$record['rtr']}" . PHP_EOL;
			$sql = "INSERT IGNORE INTO devices SET prop = '{$record['prop']}', name = 'ROUTER', type = 'Router', ip = '{$record['rtr']}', supported = {$record['rtrsup']}, status = 1, gateway = 1";
			$queries[] = $sql;
		} else {
			#echo "Router not set for {$record['prop']}" . PHP_EOL;
		}

		for($i = 1; $i <= 3; $i++) {
			if(!empty($record["gateway{$i}"])) {
				$name = str_replace("Nomadix ", "", $record["gtway_type"]);
				if(strstr($record["gtway_type"], "Nomadix")) {
					$gtype = "Nomadix";
				} else {
					$gtype = $record["gtway_type"];
				}

				$sql = "INSERT IGNORE INTO devices SET prop = '{$record['prop']}', name = '{$name}', type = '{$gtype}', ip = '{$record["gateway{$i}"]}', username = '{$record["lgn{$i}"]}', password = '{$record["pswd{$i}"]}', id = '{$record["gtwayid"]}', version = '{$record["gtwayver"]}', serial = '{$record["gtwayserial"]}', connection_type = '{$gtype}', gateway = 1, supported = 1, status = 1";
				$queries[] = $sql;
			} else {
				#echo "Gateway{$i} not set for {$record['prop']}" . PHP_EOL;
			}
		}
	}
}

foreach($queries as $sql) {
	echo $sql . PHP_EOL;
	#$res = $db->query($sql);
}

/*$prop = "OAKHW";
$property = new Property($prop);

var_dump($property->getPropertyType());*/