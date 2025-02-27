<?php
require_once '../Model/TravelOffer.php';

$dateDepart = new \DateTime('2023-12-01');
$dateRetour = new \DateTime('2023-12-10');

$offre1 = new Model\TravelOffer(
    1,
    "Vacances en Italie",
    "Rome",
    $dateDepart,
    $dateRetour,
    999.99,
    true,
    "Vacances"
);

echo "<h3>Affichage avec var_dump()</h3>";
var_dump($offre1);

echo "<h3>Affichage avec la méthode show()</h3>";
$offre1->show();
?>