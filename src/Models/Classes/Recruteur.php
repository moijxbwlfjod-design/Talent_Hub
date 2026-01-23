<?php
require_once "User.php";

class Recruteur extends User{
private $company_name;
private $email_pro;
private $city;


public function __construct($name, $email, $password, $phone, $image, $role_id, $email_pro, $company_name,$city, $id=null)
{
    return parent::__construct($id, $name, $email, $password, $phone, $image, $role_id);
    $this->email_pro = $email_pro;
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
    public function getEmailPro(){
        return $this->email_pro;
    }
    // Setters
    public function setCompanyName($company_name)
    {
        $this->company_name = $company_name;
    }
    public function setEmailPro(string $email_pro){
        $this->email_pro = $email_pro;
    }
    public function setCity($city)
    {
        $this->city = $city;
    }




}

