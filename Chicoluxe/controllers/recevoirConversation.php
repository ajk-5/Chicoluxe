<?php 

require "../models/connexionDB.php";
require_once "../models/annonce.php";
require_once "../models/utilisateur.php";
require_once "../models/message.php";
require_once '../views/header.php';

if(isset($_COOKIE['userID'])){
    if (isset($_GET['id'])) {
        $id = $_GET['id'];}
        $message= recupererMessageParConversationID($id);
        $destinataireID= $message[0]["destinataireID"];
        $envoyeur=($_COOKIE['userID']);
        $destinataire = recuperer_utilisateur_par_id($destinataireID);
        $dateEnvoi=date('Y-m-d H:i:s');
        $conversationID=$id;
        $annonceID=$message[0]["annonceID"];
        $messages = afficherconversation($conn,$id);
       header("Refresh: 90; url= ../controllers/recevoirConversation.php?id=".$id);
    
       echo "<div class='afficherMessage'>";
   
    foreach ($messages as $row ) {
        $utilisateur=recuperer_utilisateur_par_id($row['envoyeurID']);
         
        echo '<div class="messages" style="width:30%; background-color:#007fff; border-radius:30px">';
         echo '<div class="message_Date"> <div class="user" style="color:gold;">'.$utilisateur['pseudo']."</div>";
         echo "<div class='dateRecu'>".$row['date_envoi'].'</div>
         </div>';
        if (isset($row['contenu'])){
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['contenu']) . '" width="250" height="250" alt="Image">';
        };
         echo '<div class="text">'.$row['text']."</div>
         </div></br></br>";
     } 
     $annonce=recuperer_annonce_par_id($annonceID);
     if($_COOKIE['userID']==$annonce['vendeurID']){
       echo "vous etes le vendeur </div>";
     }
     else{
        
        require_once "../views/pagePaiment.php";
     }
     require_once "../views/conversation.php";
    }
    else{
        echo "vous etes pas connecte";
    }
    require_once "../views/conversation.php";