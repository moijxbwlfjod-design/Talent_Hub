<?php

namespace App\Models\Repositories;

use App\Config\Database;
use PDO;
use App\Models\Classes\User;

class LoginRepo
{
    private PDO $conn;
    public function __construct()
    {
        $this->conn = Database::getConnection();
    }



    public function getUserByEmail($email)
    {

        $query = "SELECT * FROM users WHERE  email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([":email" => $email]);
        $userArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($userArray == null) {
            return null;
        }

        $user = new User(
            $userArray['id'] ?? null,
            $userArray['full_name'],
            $userArray['email'],
            $userArray['password_hash'],
            $userArray['phone'],
            $userArray['image'],
            $userArray['role_id']
        );

        return $user;
    }

    /// get role name from roles table 

    public function getRoleName($userId)
    {
        $query = "SELECT roles.role as role_name FROM users INNER JOIN roles ON users.role_id = roles.id WHERE id = :id ";
        $stmt = $this->conn->query($query);
        $stmt->execute([":id" => $userId]);
        $role_name = $stmt->fetch(PDO::FETCH_ASSOC);
        return $role_name;
    }
}
