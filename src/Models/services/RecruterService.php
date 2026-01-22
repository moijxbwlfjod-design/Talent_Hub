<?php
require_once __DIR__ . "/../repositories/RecruterRepo.php";

class RecruterService{
    public function insertRecruter(Recruteur $recruiter){
        $RecruterRepo = new RecruterRepo();
        return $RecruterRepo->insertRecruter($recruiter);
    }
}