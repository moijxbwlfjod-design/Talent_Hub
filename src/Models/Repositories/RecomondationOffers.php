<?php
namespace App\Models\Repositories;
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require_once __DIR__ . '/../../vendor/autoload.php';

use App\Config\Database;
use PDO;

class RecomondationOffers
{
    private PDO $conn;

    public function __construct()
    {
        $this->conn = Database::getConnection();
    }

    public function getRecomondationOffers()
    {

        $query = "SELECT o.*
         FROM offers o 
         JOIN offers_tags ot ON o.id = ot.offer_id
         JOIN condidat_tag ct ON ot.tag_id = ct.tag_id
         WHERE ct.tag_id IN (SELECT tag_id FROM condidat_tag )";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $offers = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $offers;
        print_r($offers);
    }
    }
    
    $r = new RecomondationOffers();
    $r->getRecomondationOffers();
