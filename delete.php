<?php
// Fonction pour supprimer un élément dans la base de données
function supprimerElement($table, $id_to_delete) {
    // DB credentials
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'smarthr');

    try {
        // Connexion à la base de données
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
        // Paramètres de connexion (facultatif)
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Requête de suppression avec un paramètre lié
        $sql = "DELETE FROM $table WHERE id = :id";

        // Préparation de la requête
        $query = $dbh->prepare($sql);

        // Lier la valeur au paramètre :id
        $query->bindParam(':id', $id_to_delete, PDO::PARAM_INT);

        // Exécution de la requête
        $query->execute();

        // Retourner true si la suppression a réussi
        return true;

    } catch (PDOException $e) {
        // Gestion des erreurs si nécessaire
        // Vous pouvez ajouter un message d'erreur personnalisé ou enregistrer l'erreur dans un fichier de journal, par exemple.
        return false;
    }
}

// Exemple d'utilisation de la fonction
$table = 'ma_table'; // Remplacez par le nom de votre table
$id_a_supprimer = 1; // Remplacez cette valeur par l'ID que vous souhaitez supprimer

if (supprimerElement($table, $id_a_supprimer)) {
    echo "Élément supprimé avec succès.";
} else {
    echo "Une erreur s'est produite lors de la suppression de l'élément.";
}
?>