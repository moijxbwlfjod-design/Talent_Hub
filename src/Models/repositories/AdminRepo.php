<?php
require_once __DIR__ . '/../../Config/Database.php';
class AdminRepo{
    private $db = Database::getConnection();
    private string $role;
    public function showUser(){
        $sql = "select u.id,u.full_name,email,phone,r.role from users as u
        inner join roles as r on r.id = u.role_id";
        $stmt = $this->db->prepare($sql);
        // $stmt->bindParam(':role', $role);
        $stmt->execute();
        $userArr = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $userArr;
    }
    public function deleteUser($id){
        $sql = "update users set deleted_at = now() where id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id',$id,PDO::PARAM_INT);
        $stmt->execute();
    }
    public function updateOffer($title,$description,$company_name,$eamil_pro,$city,$category_name,$tag_name){
        try {
            $this->db->beginTransaction();
            $stmt = $this->db->prepare(
            "UPDATE offers SET title = ?, description = ? WHERE id = ?"
            );
            $stmt->execute([$title, $description, $offerId]);
            $stmt = $this->db->prepare(
            "UPDATE recruiters SET company_name = ?, email_pro = ?, city = ? WHERE id = ?"
            );
            $stmt->execute([$companyName, $emailPro, $city, $recruiterId]);
            $stmt = $this->db->prepare(
                "UPDATE categories SET name = ? WHERE id = ?"
            );
            $stmt->execute([$categoryName, $categoryId]);
            $stmt = $this->db->prepare(
                "UPDATE tags SET name = ? WHERE id = ?"
            );
            $stmt->execute([$tagName, $tagId]);
            $this->db->commit();
        }catch (PDOException $e) {
            $this->db->rollBack();
            throw $e;
        }

    }
    
}