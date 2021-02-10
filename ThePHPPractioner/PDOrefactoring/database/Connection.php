<?php

class Connection {

//static methods allow you to call the method without an instance of the class

  public static function make(){
    try {

      return new PDO('mysql:host=192.168.50.4;dbname=mytodos', 'external', 'external');
    } catch (PDOexception $e) {

      die($e->getMessage());
    }
  }
}