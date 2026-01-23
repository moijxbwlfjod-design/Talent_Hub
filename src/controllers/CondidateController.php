<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../../vendor/autoload.php';
// var_dump(file_exists(__DIR__ . '/../vendor/autoload.php'));
// die();
var_dump(class_exists(\App\Models\Services\CondidateService::class));



use App\Models\Services\CondidateService;
// aziz boujaada // 




class CondidateController
{


    public function condidateRegister()
    {


        $full_name = $_POST['full_name'];
        $email =  $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $resume =  $_FILES['resume'];
        $image = $_FILES['image'];
        var_dump($_FILES);
        var_dump($_POST);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // if (
            //     empty($full_name) ||
            //     empty($_email) ||
            //     empty($phone_number) ||
            //     empty($password) ||
            //     empty($confirm_password) ||
            //     empty($resume) ||
            //     empty($image)

            // ) {
            //     die("all fieldes require");
            // }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                die("Email invalid");
            }

            if ($confirm_password !== $password) {
                die("Password not match");
            }

   
            $condidateService = new CondidateService();
            $condidateService->register($full_name, $email, $phone_number, $password, $resume, $image);
        }
    }
}

$c =  new CondidateController();
$c->condidateRegister();
