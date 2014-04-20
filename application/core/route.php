<?php

class Route {

    function __construct() {
        
    }
    
    public static function Start() {
            //назначение параметров по умолчанию
            $controller_name = 'index';
            $action_name = 'index';
            $biznes_name = 'index';
            $action_parameters = array();
            
            //преобразуем строку запроса в массив
            $route_array = explode('/', $_SERVER['REQUEST_URI']);
            
            if(!empty($route_array[1])) {
               $controller_name = $route_array[1];
            }

            if(!empty($route_array[2])) {
               $action_name = $route_array[2];
            }
            
            // добавляем префиксы
            $model_name = 'Model_' . $controller_name;
            $controller_name = 'Controller_' . $controller_name;
            $biznes_name = 'Biznes_' . $controller_name;
            $action_name = 'Action_' . $action_name;
            
            if(file_exists(Q_PATH.'/application/models/'.$model_name.'.php')) {
                include Q_PATH.'/application/models/'.$model_name.'.php';
            }
            
            if(file_exists(Q_PATH.'/application/biznes/'.$biznes_name.'.php')) {
                include Q_PATH.'/application/biznes/'.$biznes_name.'.php';
            }

            if(file_exists(Q_PATH.'/application/controllers/'.$controller_name.'.php')) {
                include Q_PATH.'/application/controllers/'.$controller_name.'.php';
            } 
            else {
                header('Location: /404');
                exit;
            }

            $controller = new $controller_name();
            $controller->$action_name();
            
    }

}
