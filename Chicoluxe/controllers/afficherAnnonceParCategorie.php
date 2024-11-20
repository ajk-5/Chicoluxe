<?php
require "../models/annonce.php";
require "../models/utilisateur.php";
if (isset($_GET['id'])){
    $id=$_GET['id'];
    
    $annonces=recupererAnnonceParCategorie($id);
    $pageTitle="luxury ".$id."| trueluxury.club : best luxury marketpalce for ".$id;
    require "../views/header.php";
    if (empty($annonces)){
      echo "<div class='notification'>HURRAY🎉!! ALL THE ANNOUNCEMENTS FOR THIS CATEGORIES ARE SOLD🥳  </br></br>";
      echo '<a href="https://www.chicoluxe.com">
      <button class="pushable">
      <span class="front">
      RETURN BACK TO HOMEPAGE
      </button>
  </a></br>';
        echo '<a href="../controllers/creerAnnonce.php">
      <button class="pushable">
      <span class="front">
      PUBLISH YOUR ANNOUNCEMENT IN THIS CATEGORY
      </button>
  </a></br>';
  exit;
    }
    
    echo '<div class=afficherAnnonces>';
    foreach( $annonces as $row){
      require "../views/pageAnnonce.php";
    }
    echo '</div>';


}else{
  echo "PLEASE CHOOSE YOUR ANNOUNCEMENT " ;
  echo '<a href="www.chicoluxe.com">
  <button class="pushable">
  <span class="front" style= width:420px>
  Retour à la page d’accueil
  </button>
  </a></br>';
  exit;
}
?>