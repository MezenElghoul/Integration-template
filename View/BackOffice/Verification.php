<?php
require_once '../Model/TravelOffer.php';
require_once '../Controller/TravelOfferController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titre = htmlspecialchars($_POST['titre']);
    $destination = htmlspecialchars($_POST['destination']);
    $dateDepart = new \DateTime($_POST['date_depart']);
    $dateRetour = new \DateTime($_POST['date_retour']);
    $prix = floatval($_POST['prix']);
    $disponible = isset($_POST['disponible']) ? true : false;
    $categorie = htmlspecialchars($_POST['categorie']);

    $offre1 = new Model\TravelOffer(
        1,
        $titre,
        $destination,
        $dateDepart,
        $dateRetour,
        $prix,
        $disponible,
        $categorie
    );

    echo "<h3>Affichage avec var_dump()</h3>";
    var_dump($offre1);

    $controller = new Controller\TravelOfferController();
    $controller->showTravelOffer($offre1);
} else {
    echo "Erreur : La méthode d'envoi doit être POST.";
}
?>