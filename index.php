<?php

session_start();

require_once __DIR__ . '/vendor/autoload.php';

require "config/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();





$router=new Router();
$router->handleRequest($_GET);

?>