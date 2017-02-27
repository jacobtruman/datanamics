<?php

class Property {
	/**
	 * @var
	 */
	protected $prop;

	/**
	 * @var DBConn
	 */
	protected $db;

	protected $prop_info = array();
	protected $ip_info = array();
	protected $isp_info = array();
	protected $contact_info = array();
	protected $equipment_info = array();

	protected $property_table = "property";
	protected $property_type_table = "property_type";

	protected $logo_dir = "images/logos";
	public $na_logo = "";

	/**
	 * @param $prop
	 */
	public function __construct($prop) {
		$this->prop = $prop;
		$this->db = new DBConn("datanamics");
		$this->getPropertyInfo();
	}

	/**
	 * @throws Exception
	 */
	public function getPropertyInfo() {
		if(empty($this->prop_info)) {
			$sql = "SELECT * FROM {$this->property_table} WHERE prop = '{$this->prop}'";

			$res = $this->db->query($sql);

			if($res->num_rows) {
				$this->prop_info = $res->fetch_assoc();
			} else {
				throw new Exception("Property '{$this->prop}' not found");
			}
		}
		return $this->prop_info;
	}

	public function getPropertyType() {
		if(isset($this->prop_info['property_type_id'])) {
			$sql = "SELECT name FROM {$this->property_type_table} WHERE id = '{$this->prop_info['property_type_id']}'";

			$res = $this->db->query($sql);

			if($res->num_rows) {
				$record = $res->fetch_assoc();
				return $record['name'];
			}
		} else {
			throw new Exception("Property type id for '{$this->prop}' not found");
		}
	}

	public function getGatewayType() {
		$ret_val = null;
		$gateways = $this->getGateways();
		if(!empty($gateways)) {
			$ret_val = $gateways[0]["type"];
		}
		return $ret_val;
	}

	public function getGateways($key = null) {
		$ret_val = null;
		$devices = new Devices();
		$gateways = $devices->getGateways($this->prop);
		if(!empty($gateways) && $key !== null && isset($gateways[0][$key])) {
			$ret_val = $gateways[0][$key];
		} else {
			$ret_val = $this->getGatewayLinks($gateways);
		}

		return $ret_val;
	}

	public function getDevices() {
		$devices = new Devices();
		return $devices->getDevices($this->prop);
	}

	public function getRouter() {
		$devices = new Devices();
		return $devices->getRouter($this->prop);
	}

	public function getEquipmentInfo() {
		if(empty($this->equipment_info)) {
			$table = "equipment";
			$sql = "SELECT * FROM {$table} WHERE prop = '{$this->prop}'";

			$res = $this->db->query($sql);

			if($res->num_rows) {
				$this->equipment_info = $res->fetch_assoc();
			} else {
				$sql = "INSERT INTO {$table} SET prop = '{$this->prop}'";
				$this->db->query($sql);
				return $this->getEquipmentInfo();
			}
		}
		return $this->equipment_info;
	}

	public function getContactInfo() {
		if(empty($this->contact_info)) {
			$table = "contact";
			$sql = "SELECT * FROM {$table} WHERE prop = '{$this->prop}'";

			$res = $this->db->query($sql);

			if($res->num_rows) {
				$this->contact_info = $res->fetch_assoc();
			} else {
				$sql = "INSERT INTO {$table} SET prop = '{$this->prop}'";
				$this->db->query($sql);
				return $this->getContactInfo();
			}
		}
		return $this->contact_info;
	}

	protected function getGatewayLinks($gateways) {
		foreach($gateways as &$gateway) {
			$gateway['password'] = str_replace('#', '%23', $gateway['password']);
			// default to the dummy link
			$gateway['link'] = "http://lasdn-sd01/support_web/forms/dummy.php";
			if(isset($gateway["type"])) {
				if(!$this->isBypassed()) {
					if(strstr($gateway["type"], 'Nomadix')) {
						$gateway['link'] = "http://{$gateway['username']}:{$gateway['password']}@{$gateway['ip']}";
					} elseif(strstr($gateway["type"], 'Solution IP')) {
						$gateway['link'] = "https://{$gateway['username']}:{$gateway['password']}@{$gateway['ip']}/admin/";
					} elseif(strstr($gateway["type"], 'IP3')) {
						$gateway['link'] = "https://{$gateway['ip']}/login.cgi?username={$gateway['username']}&password={$gateway['password']}";
					} elseif(strstr($gateway["type"], 'BBSM')) {
						$gateway['link'] = "http://{$gateway['username']}:{$gateway['password']}@{$gateway['ip']}:9488/www";
					} else {
						$gateway['link'] = "http://{$gateway['ip']}";
					}
				}
			}
		}
		return $gateways;
	}

	public function getActive() {
		return $this->prop_info['active'];
	}

	public function isActive() {
		if($this->getActive()) {
			return true;
		}
		return false;
	}

	public function getStatus() {
		return $this->prop_info['status'];
	}

	public function isUp() {
		if($this->getStatus()) {
			return true;
		}
		return false;
	}

	public function getBypassed() {
		return $this->prop_info['bypassed'];
	}

	public function isBypassed() {
		if($this->getBypassed()) {
			return true;
		}
		return false;
	}

	public function getInstaller() {
		return $this->prop_info['installer'];
	}

	public function getPropCode() {
		return $this->prop_info['prop'];
	}

	public function getName() {
		return $this->prop_info['name'];
	}

	public function getNotes($key) {
		return nl2br($this->prop_info[$key]);
	}

	public function toggleStatus() {
		if($this->getStatus() == "Up") {
			$this->setStatus("Down");
		} else {
			$this->setStatus("Up");
		}
	}

	protected function setStatus($value) {
		$sql = "UPDATE property SET status = '{$value}' WHERE prop = '{$this->prop}'";
		$this->db->query($sql);
		$this->prop_info['status'] = $value;
	}

	public function getUpDownImage() {
		$ret_val = "greyx.png";
		if($this->isActive()) {
			if($this->getStatus() == "Up") {
				$ret_val = "greencheck.png";
			} else {
				$ret_val = "redx.png";
			}
		}
		return $ret_val;
	}

	public function getIPInfo() {
		if(empty($this->ip_info)) {
			$sql = "SELECT * FROM ipscope WHERE prop = '{$this->prop}'";
			$res = $this->db->query($sql);

			if($res->num_rows) {
				$this->ip_info = $res->fetch_assoc();
			} else {
				throw new Exception("IP Information for property '{$this->prop}' not found");
			}
		}
		return $this->ip_info;
	}

	public function getISPInfo() {
		$this->getIPInfo();
		if(empty($this->isp_info)) {
			$sql = "SELECT * FROM isp WHERE id = '{$this->ip_info['isp_id']}'";
			$res = $this->db->query($sql);

			if($res->num_rows) {
				$this->isp_info = $res->fetch_assoc();
			} else {
				throw new Exception("ISP Information for property '{$this->prop}' not found");
			}
		}
		return $this->isp_info;
	}

	public function getLogo() {
		$property_type = $this->getPropertyType();
		$logo = "{$this->logo_dir}/" . str_replace(' ', '', $property_type) . ".png";
		if(!file_exists(dirname(__FILE__) . "/../{$logo}")) {
			$logo = $this->getNALogo();
		}
		return $logo;
	}

	public function getNALogo() {
		return "{$this->logo_dir}/na.png";
	}
}
