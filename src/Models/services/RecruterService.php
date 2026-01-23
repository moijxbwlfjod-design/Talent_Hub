<?php
require_once __DIR__ . "/../repositories/RecruterRepo.php";

class RecruterService{
    public function insertRecruter(string $fullName, string $profileImg, string $email, string $emailPro, string $phone, string $password, int $role_id, string $companyName, string $city){
        $RecruterRepo = new RecruterRepo();
        return $RecruterRepo->insertRecruter($fullName, $profileImg, $email, $emailPro, $phone, $password, $role_id, $companyName, $city);
    }
}