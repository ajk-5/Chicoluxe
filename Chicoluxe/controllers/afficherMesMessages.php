<?php
require "../models/connexionDB.php";
require_once "../models/annonce.php";
require_once "../models/utilisateur.php";
require_once "../models/message.php";

require_once "../views/header.php";

if (isset($_COOKIE['userID'])){
    $destinataire=getDestinataire($_COOKIE['userID']);
    $envoyeur=getEnvoyeur($_COOKIE['userID']);

    $messages=afficherMesMessages($conn);
    if(empty($messages)){
        echo "vous n'avez pas aucune messages!<br>";
        echo '<a href="../controllers/bienvenueVisiteur.php">
        <button class="pushable">
        <span class="front" style= width:420px>
        Retour à la page d’accueil
        </button>
      </a></br>';
    }
    foreach ($messages as $row ) {
        $utilisateur=recuperer_utilisateur_par_id($row['envoyeurID']);
         $annonceId=$row['annonceID'];
         $annonce=recuperer_annonce_par_id($annonceId);
         $vendeur=recuperer_utilisateur_par_id($annonce['vendeurID']);
        
         echo '<a href=../controllers/recevoirConversation.php?id='.$row['conversationID'].'>'.$annonce['TITRE'].' par '.$vendeur['pseudo'].'</a></br>';
         echo $utilisateur['pseudo']."</br>";
         echo $row['date_envoi'].'</br>';
         echo $row['text']."</br></br>";
      
     } 

}else{

     echo "<div id='errorNotification'>YOU ARE NOT LOGGED IN ";         
     echo '<a href="../controllers/signUpRegister.php">
     <button class="pushable">
     <span class="front" style= width:420px>
     LOG IN
     </button>
 </a></div></br>';
 exit;;
};
