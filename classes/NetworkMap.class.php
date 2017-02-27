<?php

class NetworkMap {
	/**
	 * @var
	 */
	protected $prop;

	/**
	 * @param $prop
	 */
	public function __construct($prop) {
		$this->prop = $prop;
	}

	/**
	 * @param $level
	 * @return string
	 */
	public function getNetworkMap($level) {
		$map_image = $this->getMapImage();
		if($map_image) {
			return "<map name='FPMap0'>" . PHP_EOL . implode(PHP_EOL, $this->getDeviceCoords($level)) . PHP_EOL . "</map>" . PHP_EOL . $map_image . PHP_EOL;
		} else {
			return "Map image for {$this->prop} not found" . PHP_EOL;
		}
	}

	/**
	 * @param $level
	 * @return array
	 */
	protected function getDeviceCoords($level) {
		$coords = array();
		$devices = new Devices();

		foreach($devices->getDevices($this->prop) as $record) {
			$url = null;
			$target = '_blank';
			if(strstr($record['connection_type'], 'Nomadix')) {
				$url = "http://{$record['username']}:{$record['password']}@{$record['ip']}";
			} else if(strstr($record['connection_type'], 'Solution IP')) {
				$url = "https://{$record['username']}:{$record['password']}@{$record['ip']}/admin/";
			} else if(strstr($record['connection_type'], 'IP3')) {
				$url = "https://{$record['ip']}/login.cgi?username={$record['username']}&password={$record['password']}";
			} else if(strstr($record['connection_type'], 'BBSM')) {
				$url = "http://{$record['username']}:{$record['password']}@{$record['ip']}:9488/www";
			} else {
				// Device links
				if($level == '1') {
					$url = "{$devices->ping}{$record['ip']}";
				} else if($level == '2') {
					if($record['connection_type'] == 'telnet') {
						$target = '_parent';
						$url = "telnet:{$record['ip']} {$record['port']}";
					} else if($record['connection_type'] == 'web') {
						$url = "http://{$record['username']}:{$record['password']}@{$record['ip']}:{$record['port']}";
					} else if($record['connection_type'] == 'ping') {
						$url = "{$devices->ping}{$record['ip']}";
					}
					if(empty($record['port'])) {
						$url = rtrim($url, ':');
						$url = rtrim($url, ' ');
					}
				}
			}
			if($url !== null) {
				$coords[] = "<area href='{$url}' target='{$target}' shape='rect' coords='{$record['coords']}'>";
			}
		}

		return $coords;
	}

	protected function getMapImage() {
		$img = "network_maps/{$this->prop}.png";
		if(file_exists(dirname(__FILE__) . "/../{$img}")) {
			return "<br /><img border='0' src='{$img}' usemap='#FPMap0' border='0'>";
		} else {
			return false;
		}
	}
}
