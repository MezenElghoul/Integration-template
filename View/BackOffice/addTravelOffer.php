<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une offre de voyage</title>
</head>
<body>
    <h2>Ajouter une nouvelle offre de voyage</h2>
    <form action="Verification.php" method="POST">
        <label for="titre">Titre :</label><br>
        <input type="text" id="titre" name="titre" required><br><br>

        <label for="destination">Destination :</label><br>
        <input type="text" id="destination" name="destination" required><br><br>

        <label for="date_depart">Date de départ :</label><br>
        <input type="date" id="date_depart" name="date_depart" required><br><br>

        <label for="date_retour">Date de retour :</label><br>
        <input type="date" id="date_retour" name="date_retour" required><br><br>

        <label for="prix">Prix :</label><br>
        <input type="number" step="0.01" id="prix" name="prix" required><br><br>

        <label for="disponible">Disponible :</label><br>
        <input type="checkbox" id="disponible" name="disponible" value="1"><br><br>

        <label for="categorie">Catégorie :</label><br>
        <input type="text" id="categorie" name="categorie" required><br><br>

        <input type="submit" value="Ajouter l'offre">
    </form>
</body>
</html>