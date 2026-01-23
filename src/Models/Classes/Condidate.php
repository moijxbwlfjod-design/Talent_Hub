<?php
// aziz boujaada //
namespace App\Models\Classes;

use App\Models\Classes\User;

class Condidate extends User {
     
    private $resume ; 
   

    public function __construct($id, $name, $email, $password, $phone, $image, $role_id , $resume)
    {
        return parent::__construct($id, $name, $email, $password, $phone, $image, $role_id);

        $this->resume = $resume ;
    }


    public function getResume(){
        return $this->resume ; 
    }

    public function setResume($resume){
        $this->resume = $resume ; 
    }
}