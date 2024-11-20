<?php 
require_once "../models/utilisateur.php";
require_once '../models/annonce.php';


try {
    $categorie=null;
    $sql= recupereAnnonces($categorie);
   
    require_once "../views/header.php";
    echo "<div class='afficherAnnonces'>";
    foreach ($sql as $row){
        require "../views/pageAnnonce.php";
  
    }
    echo "</div>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;
?>