<?php
require_once "../models/utilisateur.php";
require_once "../models/annonce.php";


require_once "../views/header.php";
require_once "../views/pageRecherche.php";

if(isset($_POST['mot'])){
   $mot= $_POST['mot'];
   if(empty($mot)){
      require_once "../views/pageRecherche.php";
      echo "vous devez entrer un mot";
      exit;

   }else{
         if (isset($_POST['categorie'])){
         $categorie=$_POST['categorie'];
         }
         else{
         $categorie = null;
         }

         if (isset($_POST['order'])){
         $order=$_POST['order'];
         }
         else{
         $order = null;
         }
         if (isset($_POST['group'])){
         $group=$_POST['group'];
         }
         else{
         $group = null;
         }
         if (isset($_POST['region'])){
            $region=$_POST['region'];
         }
         else{
            $region = null;
         }
         searchAnnonce( $mot, $categorie, $group, $order, $region);
         $annonces = searchAnnonce( $mot, $categorie, $group, $order, $region);
    
         if($annonces){
         foreach( $annonces as $row){
            echo "<a href='../controllers/voirDetail.php?id={$row['annonceID']}' style='text-decoration:none;'>";
            echo "<div class='rechercheAnnonce'>";
            echo '<div id="annonceImage" class="imageAnnoncesCategorie"><img src="data:image/jpeg;base64,' . base64_encode($row['photos']) . '" width="60" height="60" alt="Image"> </div></br>';
            echo '<div class="titrePseudoPrix">';
            echo '<div><b>' . $row['TITRE'] . '</b></div>';
            echo '<div> <span style="color:green">€' . $row['prix'] . '</span></div>';
            $vendeur = recuperer_utilisateur_par_id($row['vendeurID']);
            $rating=recupererEvaluationParUtilisateurID($row['vendeurID']);
            echo '<div> ' . $vendeur["pseudo"] . '('.$rating.'⭐)</div> ';
            echo '</div></div></a>';
         }

         }else{
            echo "Aucune resultat !!!! ";
         }
   }
}
else{
   
   require_once "../views/pageRecherche.php";
   echo "veuillez entrer un mot pour rechercher";
   exit;
}
