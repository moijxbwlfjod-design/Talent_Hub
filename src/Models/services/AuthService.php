<?php

require_once __DIR__ . '/../classes/User.php';
require_once __DIR__ . '/../repositories/UserRepo.php';
class AuthService
{

    public function login(string $email, string $password)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) die("Invalid email");


        $userRepo = new UserRepo();

        $userLogin = $userRepo->getUserByEmail($email);
        if (!$userLogin) die("user not found");

        $password = password_verify($password, $userLogin->getPassword());


        if ($password) {

            $_SESSION['role'] =  $userLogin->getRole();
            $_SESSION['first_name'] = $userLogin->getFirstName();
            $_SESSION['id'] = $userLogin->getId();
            return true;
        } else {
            return false;
        }
    }

    public function register($first_name , $last_name , $email , $password , $role){

         $userRepo = new UserRepo();

         $user = new User(null , $first_name , $last_name , $email , $password , $role);

         $userRegister = $userRepo->insertUser($user);

         if($userRegister){
            return true;
         }else{
            return false ;
         }
    }
}
