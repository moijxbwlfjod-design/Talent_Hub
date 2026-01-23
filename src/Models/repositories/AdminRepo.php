<?php
require_once __DIR__ . '/../../Config/Database.php';
class AdminRepo{
    private $db;
    public function __construct(){
        $conn = new DataBase();
        $this->db = $conn->getConnection();
    }
    public function getAllUsers(){
        $sql = "select u.id,u.full_name,email,phone,r.role from users as u
        inner join roles as r on r.id = u.role_id";
        $stmt = $this->db->prepare($sql);
        // $stmt->bindParam(':role', $role);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function setUser($full_name,$email,$password,$phone,$role){
        $role_id_query = 'select id from roles where role = ? limit 1';
        $stmt1 = $this->db->prepare($role_id_query);
        $stmt1->execute([$role]);
        $role_id = $stmt1->fetch(PDO::FETCH_ASSOC);
        if(!$role_id){
            throw new Exception("Role not found: $role");
        }
        $role_id = $role_id['id'];
        $sql = 'insert into users (full_name,email,password_hash,phone,role_id) values (?,?,?,?,?)';
        $stmt2 = $this->db->prepare($sql);
        $stmt2->execute([$full_name,$email,$password,$phone,$role_id]);
        return $this->db->lastInsertedId();
    }
}