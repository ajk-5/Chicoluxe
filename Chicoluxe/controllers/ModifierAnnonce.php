<?php


require_once '../models/connexionDB.php';
require_once "../models/annonce.php";

if (isset($_GET['id'])) {
    $annonceId = $_GET['id'];

    
   $annonce= recuperer_annonce_par_id($annonceId);

    if ($annonce) {
        require_once "../views/header.php";
        require_once "../views/pageAnnonceModification.php";

?>

<?php
    } else {
        echo "Annonce non trouvée.";
    }
} else {
    echo "Aucune annonce sélectionnée pour modification.";
}
?>

