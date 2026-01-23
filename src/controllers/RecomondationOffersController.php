<?php



namespace App\Controllers;

require __DIR__ . '/../../vendor/autoload.php';

use App\Models\Services\RecomondationOffersService;

class OffersController
{
    public function index()
    {
        session_start();

        if (!isset($_SESSION['user_id'])) {
            header("Location: /TanlentHub/src/Views/Auth/login.php");
            exit;
        }

        $service = new RecomondationOffersService();
        $offers = $service->getOffersForCondidat($_SESSION['user_id']);

        
        require __DIR__ . '/../Views/Pages/RecomondationOffers.php';
    }
}

$c = new OffersController();
$c->index();



