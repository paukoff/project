<?php

class Controller_bet extends Controller {
        
        function __construct() {
            $this->model = new Model_bet();
            $this->view = new View();
        }

        public function Action_bet() {           
            $test = $this->model->get_data();            
            $this->view->generate('bet', $test);
        }
	

}