<?php
class User
{
    private $id;
    private $name;

    private $email;
    private $password;

    private $phone;
    private string $image;

    private $role_id;


    public function __construct($id, $name, $email, $password, $phone, $image, $role_id)
    {
        $this->id = $id;
        $this->name = $name;
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
        return $this->name;
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
        $this->name = $name;
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
