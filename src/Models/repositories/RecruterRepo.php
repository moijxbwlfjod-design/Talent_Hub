<?php
require_once __DIR__ . "/../../../Conception/Database/Database.php";
require_once __DIR__ . "/../Classes/Recruteur.php";

class RecruterRepo{
    private $recruters = [];

    public function insertRecruter(string $fullName, string $profileImg, string $email, string $emailPro, string $phone, string $password, int $role_id, string $companyName, string $city){
        $conn = Database::getConnection();
        $sql = "INSERT INTO users (full_name, email, password_hash, phone, image, role_id) values (?, ?, ?, ?, ?, ?)";
        $stm = $conn->prepare($sql);
        try{
            $stm->execute([$fullName, $email, $password, $phone, $profileImg, $role_id]);
            $id = $conn->lastInsertId();
            $sql = "INSERT INTO roles (id, company_name, email_pro, city) values (?, ?, ?, ?)";
            $stm = $conn->prepare($sql);
            $stm->execute([$id, $companyName, $emailPro, $city]);
            $recruters[] = new Recruteur($id, $fullName, $email, $password, $phone, $profileImg, $role_id, $emailPro, $companyName, $city);
            return true;
        }catch(Exception){
            return false;
        }
    }
}