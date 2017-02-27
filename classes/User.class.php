<?php

class User {

	protected $username;
	protected $user_info = array();

	public function __construct($username) {
		$this->username = $username;
		$this->getUserInfo();
	}

	/**
	 * @return array
	 * @throws Exception
	 */
	public function getUserInfo() {
		if(empty($this->user_info)) {
			$db = new DBConn("datanamics");

			$sql = "SELECT * FROM users WHERE username = '{$this->username}'";

			$res = $db->query($sql);

			if($res->num_rows) {
				$this->user_info = $res->fetch_assoc();
			} else {
				throw new Exception("User '{$this->username}' not found");
			}
		}

		return $this->user_info;
	}

	public function getUsername() {
		return $this->username;
	}

	public function getPermissions() {
		return $this->user_info["permissions"];
	}
}
