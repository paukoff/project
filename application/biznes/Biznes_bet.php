<?php

class Biznes_bet {
	public static $count_bet = 0;
	private $chemp_name;
	private $team1;
	private $team2;
	private $my_bet;
	
	private $win_bet = 0;
	private $loose_bet =0;
	
	public function setNewBet ($chemp_name, $team1, $team2, $my_bet) {
		$this->chemp_name=$chemp_name;
		$this->team1=$team1;
		$this->team2=$team2;
		$this->my_bet=$my_bet;
	}
	
	public function getChempName () {
		return $this->chemp_name;
	}
	
	public function getTeam1 () {
		return $this->team1;
	}
	
	public function getTeam2 () {
		return $this->team2;
	}
	
	public function my_bet () {
		return $this->my_bet;
	}

}

