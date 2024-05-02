<?php

use app\core\Router;
use Dotenv\Dotenv;
use app\helpers\Session;

require '../vendor/autoload.php';

session_start();

$dotenv = Dotenv::createImmutable('../');
$dotenv->load();

Router::run();

Session::flashRemove();
