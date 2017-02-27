<?php

class Devices {

	protected $devices = array();

	/**
	 * @var string
	 */
	public $ping = 'ping.php?theaddr=';

	public function __construct() {

	}

	/**
	 * @return array
	 */
	public function getDevices($prop) {
		if(empty($this->devices)) {
			$db = new DBConn("datanamics");

			$sql = "SELECT * FROM devices WHERE prop = '{$prop}'";

			$res = $db->query($sql);

			if($res->num_rows) {
				foreach($res as $record) {
					$this->devices[] = $record;
				}
			}
		}

		return $this->devices;
	}

	/**
	 * @param $prop
	 * @return array
	 */
	public function getGateways($prop) {
		$gateways = array();
		$devices = $this->getDevices($prop);
		foreach($devices as $device) {
			if($device['type'] == "gateway") {
				$gateways[] = $device;
			}
		}
		return $gateways;
	}

	/**
	 * @param $prop
	 * @return array|bool
	 */
	public function getRouter($prop) {
		$devices = $this->getDevices($prop);
		foreach($devices as $device) {
			if($device['type'] == "Router") {
				return $device;
			}
		}
		return false;
	}

	public function getCPELinkMap() {
		$cpe_link_map = array(
			"Gigalink" => 'Type1.php',
			"Cygnet" => 'Type2.php',
			"Cisco575" => 'Type3.php',
			"Cisco585" => 'Type4.php',
			"Netopia" => 'Type5.php',
			"Paradyne 6210" => 'Type6.php',
			"Elastic" => 'Type7.php',
			"Turbocomm" => 'Type8.php',
			"HawCPEs" => 'Type9.php',
			"Teledex" => 'Type10.php',
			"Paradyne A1-200" => 'Type11.php',
			"TUT" => 'Type12.php',
			"WaiCPEs" => 'Type13.php'
		);
		return $cpe_link_map;
	}

	public function getGADLinkMap() {
		$gad_link_map = array(
			"WET11" => 'Type1.php',
			"WE800" => 'Type2.php',
			"DWL810" => 'Type3.php',
			"OTC201" => 'Type4.php',
			"ME101" => 'Type5.php',
			"NL-2611CB3" => 'Type6.php',
			"SMC-2870W" => 'Type7.php',
			"WL-330" => 'Type8.php',
			"Cisco" => 'Type9.php',
			"3Com" => 'Type10.php',
			"DWL120" => 'Type11.php',
			"SMCWEBT-G" => 'Type12.php',
			"WUSB11" => 'Type13.php'
		);
		return $gad_link_map;
	}

	public function getConnectionTypes() {
		return array(
			"Nomadix"=>"Nomadix",
			"NULL"=>"NULL",
			"IP3"=>"IP3",
			"Solution IP"=>"Solution IP",
			"BBSM"=>"BBSM",
			"other"=>"other",
			"ZyXEL"=>"ZyXEL",
			"web"=>"web",
			"ping"=>"ping",
			"telnet"=>"telnet",
			"Toshiba Magnia SG20 Server"=>"Toshiba Magnia SG20 Server"
		);
	}

	public function getTypes() {
		return array(
			"gateway"=>"gateway",
			"router"=>"router",
			"wap"=>"wap",
			"dns"=>"dns",
			"switch"=>"switch",
			"smtp"=>"smtp"
		);
	}

	public function getDeviceLinkFromNote($note) {
		$link_map = $this->getCPELinkMap();
		foreach($link_map as $type=>$link) {
			if(stristr($type, $note)) {
				$note = str_ireplace($type, "<a href='CPE/{$link}' target='_blank'>{$type}</a>", $note);
			}
		}

		$link_map = $this->getGADLinkMap();
		foreach($link_map as $type=>$link) {
			if(stristr($type, $note)) {
				$note = str_ireplace($type, "<a href='GAD/{$link}' target='_blank'>{$type}</a>", $note);
			}
		}

		/*
		} elseif(strpos($cnote, "Paradyne")) {
			if(strpos($cnote, "A1-200")) {
				$cnotelnk = 'CPE/Type11.php';
			} elseif(strpos($cnote, "6210")) {
				$cnotelnk = 'CPE/Type6.php';
			}
		} elseif(strpos($cnote, "DWL") || strpos($cnote, "D-Link")) {
			$cnotelnk = 'GAD/Type3.php';
		} elseif(strpos($cnote, "OTC")) {
			$cnotelnk = 'GAD/Type4.php';
		} elseif(strpos($cnote, "SMC")) {
			$cnotelnk = 'GAD/Type7.php';
		}
		*/

		return $note;
	}
}
