<?php
require_once __DIR__ . '/../Models/services/AdminService.php';
class AdminConroller{
    public function DisplayUsers(){
        $service = new AdminService();
        $user = $service->getAllUsers();
        require __DIR__ . '/../Views/Dashboards/Admin/manage_user.php';
    }
    public function InsertUser(){
        if($_SERVER['REQUEST_METHOD']==="POST"){
            $full_name = $_POST['full_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            $phone = $_POST['phone'];
            $role = $_POST['role'];
            if(!$full_name && !$email && !$password && !$repassword && !$phone && !$role) die('All fields are required');
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)) die("invalid email format");
            if($password!=$repassword) die('passwords don\'t match');
            try{
                $service = new AdminService();
                $user = $service->setUser($full_name,$email,$password,$phone,$role);
                header('Location:/dashboard');
                exit;

            }catch(Exception $e){
                die('Error: '.$e->getMessage());
            }

        }
    }
}
