<?php

namespace App\Models\Classes;
require_once __DIR__ . '/../../../vendor/autoload.php';

class User
{
    
    private $id;
    private $full_name;

    private $email;
    private $password;

    private $phone;
    private ?string $image;

    private $role_id;


    public function __construct($id, $full_name, $email, $password, $phone, $image, $role_id)
    {
        $this->id = $id;
        $this->full_name = $full_name;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->image = $image;
        $this->role_id = $role_id;
    }
    //Getters

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->full_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getRoleId()
    {
        return $this->role_id;
    }
    //Setters:

    public function setName(string $name)
    {
        $this->full_name = $name;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function setPhone(string $phone)
    {
        $this->phone = $phone;
    }

    public function setImage(?string $image)
    {
        $this->image = $image;
    }

    public function setRoleId(int $role_id)
    {
        $this->role_id = $role_id;
    }
}