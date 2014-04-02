<?php 
function __autoload($class){
	require_once "$class.php";
}
class UserInfo implements User {
	private $name;
	private $phone;
	private $email;
	private $rate = 100;
	private $countBet = 0;
	private $countWin = 0;
	private $countLoose = 0;

	public function setName($name) {
		$this -> name = $name;
	}
	public function getName() {
		return $this -> name;
	}
	public function setPhone($phone) {
		$phone = $this -> phone;
	}
	public function getPhone() {
		return $this -> phone;
	}
	public function setEmail($email) {
		$this -> email = $email;
	}
	public function getEmail() {
		return $this -> email;
	}
	public function setRate($rate) {
		$rate = $this -> rate;
	}
	public function getRate() {
		return $this -> rate;
	}
	public function setCountBet($countBet) {
		$countBet = $this -> countBet;
	}
	public function getCountBet() {
		return $this -> countBet;
	}
	public function setCountWin($countWin) {
		$countWin = $this -> countWin;
	}
	public function getCountWin() {
		return $this -> countWin;
	}
	public function setCountLoose($countLoose) {
		$countLoose = $this -> countLoose;
	}
	public function getCountLoose() {
		return $this -> countLoose;
	}
}
//$test = new UserInfo;
//$test -> setName("UserMan");

//$test -> setEmail("test@test.com");
//echo $test -> getName();
//echo "<pre>";
//print_r ($test);
//echo "</pre>";
