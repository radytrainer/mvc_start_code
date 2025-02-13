<?php
require_once "Router.php";
require_once "Database/Database.php";
require_once "Controllers/BaseController.php";
require_once "Controllers/UserController.php";

$route = new Router();
$route->get("/user", [UserController::class, 'index']);
$route->get("/user/create", [UserController::class, 'create']);
$route->post("/user/store", [UserController::class, 'store']);

$route->route();