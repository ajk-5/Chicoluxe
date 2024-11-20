<?php
require_once "../models/connexionDB.php";
require_once "../models/annonce.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['annonceID'])) {
    try {
        $id = $_POST['annonceID'];

        supprimerLesAnnonce($id);

        header("Location: ../controllers/afficherMesAnnonces.php");
        exit();
    } catch (PDOException $e) {
        echo "Erreur lors de la suppression de l'annonce : " . $e->getMessage();
    }
} else {
    echo "Erreur : Aucune annonce à supprimer spécifiée.";
}
?>
