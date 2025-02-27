<?php

namespace Model;

class TravelOffer {
    private int $id;
    private string $titre;
    private string $destination;
    private \DateTime $date_depart;
    private \DateTime $date_retour;
    private float $prix;
    private bool $disponible;
    private string $categorie;

    public function __construct(
        int $id,
        string $titre,
        string $destination,
        \DateTime $date_depart,
        \DateTime $date_retour,
        float $prix,
        bool $disponible,
        string $categorie
    ) {
        $this->id = $id;
        $this->titre = $titre;
        $this->destination = $destination;
        $this->date_depart = $date_depart;
        $this->date_retour = $date_retour;
        $this->prix = $prix;
        $this->disponible = $disponible;
        $this->categorie = $categorie;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function getDestination(): string {
        return $this->destination;
    }

    public function getDateDepart(): \DateTime {
        return $this->date_depart;
    }

    public function getDateRetour(): \DateTime {
        return $this->date_retour;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public function isDisponible(): bool {
        return $this->disponible;
    }

    public function getCategorie(): string {
        return $this->categorie;
    }

    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }

    public function setDestination(string $destination): void {
        $this->destination = $destination;
    }

    public function setDateDepart(\DateTime $date_depart): void {
        $this->date_depart = $date_depart;
    }

    public function setDateRetour(\DateTime $date_retour): void {
        $this->date_retour = $date_retour;
    }

    public function setPrix(float $prix): void {
        $this->prix = $prix;
    }

    public function setDisponible(bool $disponible): void {
        $this->disponible = $disponible;
    }

    public function setCategorie(string $categorie): void {
        $this->categorie = $categorie;
    }

    public function show(): void {
        echo "<table border='1'>";
        echo "<tr><th colspan='2'>Détails de l'offre de voyage</th></tr>";
        echo "<tr><td>ID</td><td>" . $this->id . "</td></tr>";
        echo "<tr><td>Titre</td><td>" . htmlspecialchars($this->titre) . "</td></tr>";
        echo "<tr><td>Destination</td><td>" . htmlspecialchars($this->destination) . "</td></tr>";
        echo "<tr><td>Date de départ</td><td>" . $this->date_depart->format('Y-m-d') . "</td></tr>";
        echo "<tr><td>Date de retour</td><td>" . $this->date_retour->format('Y-m-d') . "</td></tr>";
        echo "<tr><td>Prix</td><td>" . number_format($this->prix, 2) . " €</td></tr>";
        echo "<tr><td>Disponible</td><td>" . ($this->disponible ? "Oui" : "Non") . "</td></tr>";
        echo "<tr><td>Catégorie</td><td>" . htmlspecialchars($this->categorie) . "</td></tr>";
        echo "</table>";
    }
}

?>