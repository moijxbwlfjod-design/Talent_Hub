<?php

require_once __DIR__ . '/../Router.php';
require_once __DIR__ . '/../controllers/HomeController.php';
require_once __DIR__ . '/../controllers/LoginController.php';
require_once __DIR__ . '/../controllers/RegisterController.php';
require_once __DIR__ . '/../controllers/DashboardController.php';

$route = new Router();

$route->get("/", HomeController::class, 'index');
$route->get("/login", LoginController::class, 'showLoginForm');
$route->post("/login", LoginController::class, 'login');
$route->get("/register", RegisterController::class, 'showRegisterForm');
$route->post("/register", RegisterController::class, 'register');
$route->get("/dashboards", DashboardController::class, 'index');

$route->dispatch();