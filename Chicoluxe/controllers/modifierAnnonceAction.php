<?php
require_once '../models/connexionDB.php'; // Assurez-vous d'inclure le fichier de connexion
require_once '../models/annonce.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $annonceId = $_POST['annonceId'];
    $nouveauLoueVendre = $_POST['loueVendre'];
    $nouveauTitre = $_POST['titre'];
    $nouvelleCategorie = $_POST['categorie'];
    $nouveauPrix = $_POST['prix'];
    $nouvelleDescription = $_POST['description'];
    
    modifierAnnonce($nouveauLoueVendre,$nouveauTitre,$nouvelleCategorie,$nouveauPrix,$nouvelleDescription,$annonceId);

    header("Location: voirDetail.php?id=$annonceId");
    exit();
} else {
    echo "Méthode non autorisée pour accéder à cette page.";
}
?>
