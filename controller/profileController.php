<?php
require_once "module/service.php";
class UserControll {
	function UserProfile ($id) {
		$res = $this -> getUserServise();
		$user = $res -> find ($id);
		if ($user) {
			return true;
		} else {
			return false;
		}
	}
}