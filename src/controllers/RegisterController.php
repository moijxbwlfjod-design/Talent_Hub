<?php
require_once __DIR__ . "/../services/RecruterService.php";

class RegisterController{
    public function RegisterRecruter(){
        if(isset($_POST) && isset($_POST["Recruter-Register"])){
            $fullName = $_POST["fullName"];
            $profileImg = $_POST["profileImg"];
            $email = $_POST["email"];
            $city = $_POST["city"];
            $companyName = $_POST["company_name"];
            $emailPro = $_POST["emailPro"];
            $phone = $_POST["phone"];
            $password = $_POST["password"];
            $confirmPass = $_POST["confirmPassword"];
            if(!empty($fullName) && !empty($profileImg) && !empty($email) && !empty($city) && !empty($companyName) && !empty($emailPro) && !empty($phone) && !empty($password) && !empty($confirmPass) && $password === $confirmPass && strlen($password) >= 8 && filter_var($email, FILTER_VALIDATE_EMAIL) && filter_var($emailPro, FILTER_VALIDATE_EMAIL)){
                $role_id = 2;
                $RecruterServ = new RecruterService();
                if($RecruterServ->insertRecruter($fullName, $profileImg, $email, $emailPro, $phone, password_hash($password, PASSWORD_DEFAULT), $role_id, $companyName, $city)){
                    header("location: ../Views/Profiles/recruiterProfile.html");
                    exit;
                }
                else{
                    header("location: ../Views/Auth/recruiter_Register.html");
                    exit;
                }
            }
        }
    }
}