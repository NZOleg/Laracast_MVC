<?php

use App\Core\App;
use App\Core\Database\QueryBuilder;
use App\Core\Database\Connection;

@ini_set( 'display_errors', 1 );

App::bind('config', require 'config.php');
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

$config = App::get('config');



function view($name, $data = []){
    extract($data);
    return require "app/views/{$name}.view.php";

}

function redirect($path){
    header("Location: /{$path}");
}