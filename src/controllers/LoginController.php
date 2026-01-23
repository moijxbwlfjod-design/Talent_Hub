<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once __DIR__ . '/../../vendor/autoload.php';

use App\Models\Services\LoginService;

class LoginController
{

    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email =  $_POST['email'];
            $password = $_POST['password'];

            if (empty($email) || empty($password)) {
                die("All fields require");
            }

            $loginService = new LoginService();
            $user = $loginService->login($email, $password);

            if (!$user) {
                die("email or password incorrect");
            } else {
                header("Location: /dashboard");
            }
        }
    }
}

$loginC = new LoginController();
$loginC->login();
