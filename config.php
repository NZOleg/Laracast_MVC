<?php

return [
  'database' => [
      'name' => 'mytodo',
      'username' => 'root',
      'password' => '',
      'connection' => 'mysql:host=127.0.01',
      'options' => [

          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ]
  ]

];