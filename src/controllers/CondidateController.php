<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../../vendor/autoload.php';




use App\Models\Services\CondidateService;
// aziz boujaada // 




class CondidateController
{


    public function condidateRegister()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $full_name = $_POST['full_name'];
        $email =  $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $resume =  $_FILES['resume'];
        $image = $_FILES['image'];


            // if (
            //     empty($full_name) ||
            //     empty($_email) ||
            //     empty($phone_number) ||
            //     empty($password) ||
            //     empty($confirm_password)

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
            $user = $condidateService->register($full_name, $email, $phone_number, $password, $resume, $image);

           if($user){
               header("Location: /../../TanlentHub/src/Views/Auth/login.php");
               }else{
               echo "register Failed";
           }
        }
       
    }
}

$c =  new CondidateController();
$c->condidateRegister();
