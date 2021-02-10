<?php

class Connection {

//static methods allow you to call the method without an instance of the class

  public static function make($config){
    try {

      //replace hardcoded return statement with config values
      //return new PDO('mysql:host=192.168.50.4;dbname=mytodos', 'external', 'external');

      return new PDO(
        $config['connection'].';dbname='.$config['name'],
        $config['username'],
        $config['password'],
        $config['options']
      );
    } catch (PDOException $e) {

      die($e->getMessage());
    }
  }
}