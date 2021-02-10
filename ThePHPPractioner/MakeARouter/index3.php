<?php

$database = require 'core/bootstrap.php'; 

//$router = new Router; //now instance is created in Router class

//require 'routes.php'; //moved to the load function below

//$uri = (trim($_SERVER['REQUEST_URI'], '/')); // function moved to Request class


require Router::load('routes.php')

  ->direct(Request::uri());

  //->direct($uri); // replaced by static function

// intermediate steps breaking down the chained command above
// $router = Router::load('routes.php');

// require $router->direct($uri);
