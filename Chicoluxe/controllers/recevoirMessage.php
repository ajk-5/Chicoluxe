<?php 

require "../models/connexionDB.php";
require_once "../models/annonce.php";
require_once "../models/utilisateur.php";
require_once "../models/message.php";
if(isset($_COOKIE['userID'])){
    if (isset($_GET['id'])) {
    $id = $_GET['id'];}
    $annonceID= recuperer_annonce_par_id($id);
    $destinaireID=($annonceID['vendeurID']);
    $envoyeur=($_COOKIE['userID']);
    $destinataire = recuperer_utilisateur_par_id($destinaireID);
    $dateEnvoi=date('Y-m-d H:i:s');
$messages = afficherMessage($conn,$envoyeur,$destinataire,$annonceID);
    foreach ($messages as $row ) {
        $utilisateur=recuperer_utilisateur_par_id($row['envoyeurID']);
    
         echo $utilisateur['pseudo']."</br>";
         echo $row['date_envoi'].'</br>';
         echo $row['contenu']."</br></br>";
      
     } 
     require_once "../views/messagerie.php";
    }
    else{
        echo "vous etes pas connecte";
    }