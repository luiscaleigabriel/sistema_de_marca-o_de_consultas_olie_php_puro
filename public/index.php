<?php

use app\core\Router;
use app\helpers\Session;

require '../vendor/autoload.php';

session_start();

try {
    Router::run();
} catch (Exception $e) {
    dd($e->getMessage());
}

Session::flashRemove();
