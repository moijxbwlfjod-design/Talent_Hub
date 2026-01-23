<?php
session_start();
require_once __DIR__ . "/../src/controllers/HomeController.php";
require_once __DIR__ . "/../src/controllers/LoginController.php";
require_once __DIR__ . "/../src/controllers/CondidateController.php";
require_once __DIR__ . "/../src/controllers/AdminController.php";

$path = str_replace("/Talent_Hub","",$_SERVER['REQUEST_URI']);
$method = $_SERVER['REQUEST_METHOD'];


$path = strtok($path,"?");

if($path==='') $path = '/';
switch($path){
    case '/':case'/home':
        $home = new HomeController();
        $home->index();
        break;
    case '/login':
        $auth = new LoginController();
        if ($method === 'GET') {
            $auth->loginPage();
        } else {
            $auth->login();
        }
        break;
    case '/register':
        $auth = new CondidateController();
        if ($method === "GET") {
            $auth->registerPage();
        } else {
            $auth->condidateRegister();
        }
        break;
    case '/dashboard':
        if (!isset($_SESSION['email'])) {
            header("Location: Talent_Hub/login");
            exit;
        }
        $home = new HomeController();
        $home->dashboard();
        break;
    case '/admin/users':
        // if (!isset($_SESSION['email'])) {
        //     header("Location: Talent_Hub/login");
        //     exit;
        // }
        $admin = new AdminConroller();
        $admin->DisplayUsers();
        break;
    case '/admin/users/create':
        if (!isset($_SESSION['email'])) {
            header("Location: {$baseFolder}/login");
            exit;
        }
        $admin = new AdminConroller();
        if ($method === 'GET') {
            $admin->showUserForm();
        } else {
            $admin->InsertUser();
        }
        break;
    case '/logout':
        session_destroy();
        header("Location: {$baseFolder}/login");
        exit;
        break;
    default:
        http_response_code(404);
        require __DIR__ . "/../src/Views/errors/404.php";
        break;
}