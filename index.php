<?php



require 'vendor/autoload.php';

require 'app/core/bootstrap.php';
use App\Core\{Request, Router};

Router::load('app/routes.php')
    ->direct(Request::uri(), Request::method());