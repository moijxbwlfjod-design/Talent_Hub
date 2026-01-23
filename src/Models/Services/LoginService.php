<?php

namespace App\Models\Services;

use App\Models\Repositories\LoginRepo;

class LoginService
{

    public function login($email, $password)
    {

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("invalid Email adresse");
        }



        $loginRepo = new LoginRepo();
        $isUserExist = $loginRepo->getUserByEmail($email);

        if (!$isUserExist) {
           die("Email or Password Incorrect");
        }
        $userId = $isUserExist->getId();
        /// get role name 
        $roleName = $loginRepo->getRoleName($userId);
        $password = password_verify($password, $isUserExist->getPassword());
        
        var_dump($roleName);
        if ($password) {
            $_SESSION['user_id'] = $isUserExist->getId();
            $_SESSION['user_name'] = $isUserExist->getName();
            $_SESSION['user_role'] = $roleName;
           return true ;
        }else{
            return false ; 
        }
    }
}
