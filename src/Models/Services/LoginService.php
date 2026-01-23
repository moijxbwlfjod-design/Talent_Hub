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
            die("User noy found");
        }
        $userId = $isUserExist->getId();
        /// get role name 
        $roleName = $loginRepo->getRoleName($userId);
        $password = password_verify($password, $isUserExist->getPassword());

        if ($password) {
            $_SESSION['user_id'] = $isUserExist->getId();
            $_SESSION['user_name'] = $isUserExist->getName();
            $_SESSION['user_role'] = $roleName;
            print_r($_SESSION);
        }
    }
}
