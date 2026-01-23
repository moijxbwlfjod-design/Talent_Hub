<?php
namespace App\Models\Services;

use App\Models\Repositories\RecomondationOffers;

class RecomondationOffersService
{
    public function getOffersForCondidat(int $condidatId)
    {
        $repo = new RecomondationOffers();
        return $repo->getRecomondationOffers($condidatId);
    }
}