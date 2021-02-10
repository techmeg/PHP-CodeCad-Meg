<?php

return [
  'database' => [
    'name' => 'mytodos',
    'username' => 'external',
    'password' => 'external',
    'connection' =>'mysql:host=192.168.50.4',
    'options' => [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
  ]
  ];