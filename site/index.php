<?php 
session_start();
//load models
require "../config.php";
require "../connectDB.php";
require "../bootstrap.php";
require "../vendor/autoload.php";

//router
$c = $_GET["c"] ?? "home";
$a = $_GET["a"] ?? "index";
$controllerName = ucfirst($c). "Controller";//HomeController
require "controller/" . $controllerName . ".php";
$controller = new $controllerName();//new HomeController();
$controller->$a();//$controller->index();
?>