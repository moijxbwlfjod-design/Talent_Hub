<?php
require_once __DIR__ . "/../../../Conception/Database/Database.php";
require_once __DIR__ . "/../Classes/Offer.php";

class OfferRepo{
    private $conn;
    private $offers = [];

    public function __construct(){
        $this->conn = Database::getConnection();
    }
    public function DisplayOffers(){
        try{
            $sql = "SELECT * FROM offers where deleted_at = null";
            $stm = $this->conn->query($sql);
            return $stm->fetchAll(PDO::FETCH_ASSOC);
        } catch(Exception){
            return false;
        }
    }

    public function InsertOffer(Offer $offer){
        try{
            $sql = "INSERT INTO offers (title, description, recuiter_id, category_id) values (?, ?, ?, ?)";
            $stm = $this->conn->prepare($sql);
            $stm->execute([$offer->getTitle(), $offer->getDescription(), $offer->getRecruiterId(), $offer->getCategorieId()]);
            $this->offers[] = $offer;
            return true;
        } catch(Exception){
            return false;
        }
    }

    public function UpdateOffer(Offer $offer){
        try{
            $sql = "UPDATE offers set title = ?, description = ?, recuiter_id = ?, category_id = ?, where id = ?";
            $stm = $this->conn->prepare($sql);
            $stm->execute([$offer->getTitle(), $offer->getDescription(), $offer->getRecuiterId(), $offer->getCategorieId(), $offer->getId()]);
            return true;
        }catch (Exception){
            return false;
        }
    }

    public function DeleteOffer(int $id){
        try{
            $sql = "UPDATE offers set deleted_at = NOW() WHERE id = ?";
            $stm = $this->conn->prepare($sql);
            $stm->execute([$id]);
            return true;
        } catch (Exception){
            return false;
        }
    }
}