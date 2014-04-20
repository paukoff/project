<?php

function __autoload ($class) {
    include Q_PATH.'/application/core/'.$class. '.php';
}

//include Q_PATH.'/public/css/style.css';
//include Q_PATH.'/public/css/bootstrap.css';
/*include Q_PATH.'/application/core/model.php';
include Q_PATH.'/application/core/view.php';
include Q_PATH.'/application/core/biznes.php';

include Q_PATH.'/application/core/route.php';*/

Route::Start();
