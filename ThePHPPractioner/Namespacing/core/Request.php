<?php

namespace App\Core;

class Request {
  public static function uri() 
  {

    // use parse_url to get just the part of the path you want, minus the get request info
    return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    //return (trim($_SERVER['REQUEST_URI'], '/'));
  }

  public static function method()
  {
    return $_SERVER['REQUEST_METHOD']; // returns GET or POST
  }
}