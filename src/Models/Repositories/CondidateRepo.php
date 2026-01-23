<?php
// aziz boujaada //
namespace App\Models\Repositories;

use App\Config\Database;


use App\Models\Classes\Condidate;
use PDO;
use PDOException;

class CondidateRepo
{

   private PDO $conn;
   public function __construct()
   {
      $this->conn = Database::getConnection();
   }



   public function getRoleID($role = 'condidate')
   {
      $query = "SELECT id FROM roles WHERE role = :role";
      $stmt = $this->conn->prepare($query);
      $stmt->execute([":role" => $role]);
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result['id'] ?? null;
   }

   public function emailExist($email){
      $query = "SELECT email FROM users WHERE email = :email";
      $stmt = $this->conn->prepare($query);
      $stmt->execute([":email" => $email]);
      $result = $stmt->fetch(PDO::FETCH_ASSOC) ? true : false;
      return $result ; 
   }


   public function insertUser(Condidate $condidate)
   {
      $query = "INSERT INTO users(full_name , email , password_hash , phone , image , role_id)
       VALUES (:full_name , :email , :password_hash , :phone , :image , :role_id) ";

      $stmt = $this->conn->prepare($query);

      $stmt->execute([
         ":full_name" => $condidate->getName(),
         ":email" => $condidate->getEmail(),
         ":password_hash" => $condidate->getPassword(),
         ":phone" => $condidate->getPhone(),
         ":image" => $condidate->getImage(),
         ":role_id" => $condidate->getRoleId()
      ]);

      return $this->conn->lastInsertId();
   }


   public function insertCondidat(Condidate $condidate)
   {

      $this->conn->beginTransaction();
      try{
         $userId = $this->insertUser($condidate);
         $query = "INSERT INTO condidats (id , cv_path) VALUES (:id  ,:cv_path)";
         $stmt = $this->conn->prepare($query);
         $stmt->execute([
            ":id" => $userId,
            ":cv_path" => $condidate->getResume()
         ]);
        $this->conn->commit();
      }catch(PDOException $e){
         $this->conn->rollBack() ;
         echo $e->getMessage() ; 
      }
   }
}
