<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Models\Services\LoginService;
class LoginController {

    public function loginPage(){
        include __DIR__ . "/../Views/Auth/login.php";
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'] ?? null;
            $password = $_POST['password'] ?? null;

            if(empty($email) || empty($password)){
                die("All fields are required");
            }

            $loginService = new \App\Models\Services\LoginService();
            $user = $loginService->login($email, $password);

            if(!$user){
                echo "<p style='color:red'>Invalid email or password</p>";
                $this->loginPage();
            } else {
                $_SESSION['email'] = $user->getEmail();  // now works
                header("Location: /Talent_Hub/dashboard");
                exit;
            }
        }
    }
}
