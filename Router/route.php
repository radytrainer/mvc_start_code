<?php
require_once "Router.php";
require_once "Database/Database.php";
require_once "Controllers/BaseController.php";
require_once "Controllers/UserController.php";
require_once "Controllers/WelcomeController.php";
require_once "Controllers/CategoriesController.php";
require_once "Controllers/ProductController.php";

$route = new Router();
$route->get("/", [WelcomeController::class, 'welcome']);

// User routes
$route->get("/user", [UserController::class, 'index']);
$route->get("/user/create", [UserController::class, 'create']);
$route->post("/user/store", [UserController::class, 'store']);


// Categories routes
$route->get("/categories", [CategoriesController::class, 'index']);

// Products routes
$route->get("/products", [ProductController::class, 'index']);
$route->route();