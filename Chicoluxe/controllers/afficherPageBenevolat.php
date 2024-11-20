<?php 
require_once "../models/utilisateur.php";
require_once '../models/annonce.php';
require_once "../views/header.php";


try {
    $loueVendBenevolat='benevolat';
    

    if(recupereLouerBenevolat($loueVendBenevolat)){

    $sql= recupereLouerBenevolat($loueVendBenevolat);
   
    require_once "../views/header.php";
    echo "<div class='afficherAnnonces'>";
    foreach ($sql as $row){
        require "../views/pageAnnonce.php";
  
    }
    echo "</div>";
    }
    else{
        echo "Il n'y a pas des annonces pour cette categorie</br></br>";
        echo '<a href="../controllers/bienvenueVisiteur.php">
        <button class="pushable">
        <span class="front" style= width:420px>
        Retour à la page d’accueil
        </button>
    </a></br>';
    exit;
    }
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


$conn = null;
?>