<?php

class Controller_index extends Controller {

    function __construct() {
        
    }
    public function Action_index() {
        $model = new Model_bet();
        $view = new View();
        $view->generate('index', $model->getName());
    }

}