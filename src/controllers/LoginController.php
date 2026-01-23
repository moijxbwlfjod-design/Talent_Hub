<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Models\Services\LoginService;
class LoginController {

    public function login(){

    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $email =  $_POST['email'];
        $password = $_POST['password'];

        if(empty($email) || empty($password)){
            die("All fields require");
        }

        $user = $loginService = new LoginService();
        $loginService->login($email , $password);

        if(!$user){
            die("Login failed");
        }else{
            header("Location: /dashboard");
        }
    }
    }
} 

$loginC = new LoginController();
$loginC->login();