<?php
namespace App\Models\Services;

use App\Models\Repositories\LoginRepo;

class LoginService
{
    public function login($email, $password)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email address");
        }

        $loginRepo = new LoginRepo();
        $user = $loginRepo->getUserByEmail($email);

        if (!$user) {
            die("Email or password incorrect");
        }

        $roleName = $loginRepo->getRoleName($user->getId());

        if (password_verify($password, $user->getPassword())) {
            // store session
            $_SESSION['user_id'] = $user->getId();
            $_SESSION['user_name'] = $user->getName();
            $_SESSION['user_role'] = $roleName;

            return $user;  // return user object
        } else {
            return false;
        }
    }
}
