<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . "/../Models/services/RecruterService.php";

class RegisterController{
    public function RegisterRecruter(){
        if(isset($_POST) && isset($_POST["Recruter-Register"])){
            print_r($_POST);
        } else{
            //header("location: ../../Views/Home.html");
            echo "khdam";
            exit;
        }
    }
}

$RegisterController = new RegisterController();
$RegisterController->RegisterRecruter();