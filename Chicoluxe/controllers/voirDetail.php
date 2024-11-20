<?php
require_once "../views/header.php";
require_once "../models/annonce.php";
require_once "../models/utilisateur.php";
if (isset($_GET['id'])) {
    $itemId = $_GET['id'];
    $row = recuperer_annonce_par_id($itemId);
    require_once "../views/annonceDetail.php";
}
else{
    echo "aucune annonce selectee ";
}
?>