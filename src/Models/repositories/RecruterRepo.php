<?php
require_once __DIR__ . "/../../../Conception/Database/Database.php";
require_once __DIR__ . "/../Classes/Recruteur.php";

class RecruterRepo{
    private $recruters = [];
    private $conn;

    public function __construct(){
        $this->conn = Database::getConnection();
    }

    public function insertRecruter(Recruteur $recruter){
        $sql = "INSERT INTO users (full_name, email, password_hash, phone, image, role_id) values (?, ?, ?, ?, ?, ?)";
        $stm = $this->conn->prepare($sql);
        try{
            $stm->execute([$fullName, $email, $password, $phone, $profileImg, $role_id]);
            $id = $this->conn->lastInsertId();
            $sql = "INSERT INTO roles (id, company_name, email_pro, city) values (?, ?, ?, ?)";
            $stm = $this->conn->prepare($sql);
            $stm->execute([$id, $companyName, $emailPro, $city]);
            $recruters[] = $recruter;
            return true;
        }catch(Exception){
            return false;
        }
    }
}