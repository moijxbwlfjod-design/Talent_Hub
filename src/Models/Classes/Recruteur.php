<?php
require_once __DIR__ . "/../classes/User.php";

class Recruteur extends User{
private $company_name;

private $city;


public function __construct($id, $name, $email, $password, $phone, $image, $role_id,$company_name,$city)
{
    return parent::__construct($id, $name, $email, $password, $phone, $image, $role_id);
    
    $this->company_name= $company_name;
    $this->city=$city;
}

 // Getters:
    public function getCompanyName()
    {
        return $this->company_name;
    }

    public function getCity()
    {
        return $this->city;
    }
    // Setters
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
    }


    public function setCity($city)
    {
        $this->city = $city;
    }




}

