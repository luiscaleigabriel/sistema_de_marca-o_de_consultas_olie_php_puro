<?php

use app\core\Router;

require '../vendor/autoload.php';

session_start();

try {
    Router::run();
} catch (Exception $e) {
    dd($e->getMessage());
}

