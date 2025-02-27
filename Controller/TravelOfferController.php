<?php

namespace Controller;

use Model\TravelOffer;

class TravelOfferController {
    public function showTravelOffer(TravelOffer $offer): void {
        echo "<h3>Affichage avec la méthode showTravelOffer()</h3>";
        $offer->show();
    }
}
?>