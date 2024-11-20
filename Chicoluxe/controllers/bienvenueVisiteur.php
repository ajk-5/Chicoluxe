<?php
require_once "./models/annonce.php";
require_once "./models/utilisateur.php";


require_once "./views/header.php";
require_once "./views/pageChoix.php";
require_once "./views/bienvenue_main.php";

try {
    $categorie = "REAL ESTATE";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }

    $categorie = "YATCH";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }

    $categorie = "CLOTHING";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }

    $categorie="PRIVATE JET";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }
    $categorie="VEHICLE";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }
    $categorie="COLLECTIBLES";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }
   /* $categorie="";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }*/


    
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

$conn = null;

?>