<?php

return [
  'database' => [
      'name' => 'mytodo',
      'username' => 'olegok',
      'password' => 'StrongMan3',
      'connection' => 'mysql:host=127.0.01',
      'options' => [

          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ]
  ]

];