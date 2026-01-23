<?php
require_once __DIR__ . '/../../../vendor/autoload.php';
use App\Models\Repositories\AdminRepo;
class AdminService{
    public function getAllUsers(){
        $service = new AdminRepo();
        return $service->getAllUsers();
    }
    public function setUser($full_name,$email,$password,$phone,$role){
        $repo = new AdminRepo();
        $passwordHashed = password_hash($password,PASSWORD_DEFAULT);
        return $repo->setUser($full_name,$email,$passwordHashed,$phone,$role);
    }

}