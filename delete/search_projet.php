<?php

        include('../includes/config.php');
// Fonction de recherche dans la base de données
function rechercherDansBDD($elementRecherche) {
    // Établir la connexion à la base de données (à adapter avec vos informations)
    $serveur = "localhost";
    $utilisateur = "root";
    $motDePasse = "";
    $baseDeDonnees = "smarthr";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupère l'élément de recherche saisi par l'utilisateur
        $elementRecherche = $_POST["elementRecherche"];
    
    // Connexion à la base de données
    $connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees);

    // Vérifier si la connexion s'est bien établie
    if (!$connexion) {
        die("Connexion échouée : " . mysqli_connect_error());
    }

    // Échapper les caractères spéciaux pour éviter les injections SQL (facultatif si vous utilisez des requêtes préparées)
    // Construire la requête SQL
    $requete = "SELECT * FROM projets WHERE id='$elementRecherche'";

    // Exécuter la requête
    $resultat = mysqli_query($connexion, $requete);

    // Vérifier si la requête a réussi
    if (!$resultat) {
        die("Erreur de requête : " . mysqli_error($connexion));
    }

    // Traiter les résultats
    $resultatsTrouves = array();

    while ($row = mysqli_fetch_assoc($resultat)) {
        // Faites ce que vous souhaitez avec chaque ligne de résultat
        // Par exemple, stocker les résultats dans un tableau
        $resultatsTrouves[] = $row;
    }

    // Fermer la connexion à la base de données
    mysqli_close($connexion);

    // Retourner les résultats trouvés
    return $resultatsTrouves;
}

// Vérifie si le formulaire a été soumis

    // Appelle la fonction de recherche dans la base de données
    $resultatsTrouves = rechercherDansBDD($elementRecherche);

    // Affiche les résultats
    if (count($resultatsTrouves) > 0) {
        foreach ($resultatsTrouves as $resultat) {
            // Affiche les données pertinentes pour chaque résultat
            echo "Champ 1 : " . $resultat['id'] . "<br>";
            echo "Champ 2 : " . $resultat['nom'] . "<br>";
            echo "Champ 2 : " . $resultat['description'] . "<br>";
            echo "Champ 2 : " . $resultat['date'] . "<br>";
            // ... continuez avec les autres champs que vous avez dans votre base de données
            echo "<br>";
        }
    } else {
        echo "<p>Aucun résultat trouvé.</p>";
    }
}
?>

            
?>


?>