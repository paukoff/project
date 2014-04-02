<?php
include 'controller/profileController.php';
$argv[1] = "UserProfile";
switch ($argv[1]) {
	case "UserProfile":
		$ctrl = new UserControll();
		$user = $ctrl -> UserProfile("text");
		require_once "view/user/profile.php";
}
//$x = new UserInfo;
//$x->setName($argv[1]);
//$x->setEmail($argv[2]);
//var_dump($argv);
//var_dump($x);


