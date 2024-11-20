<?php
require_once '../models/annonce.php';
require_once '../models/message.php';

if(isset($_GET['id'])){
$id=$_GET['id'];
$message=recupererMessageParConversationID($id);
$annonceID=$message[0]['annonceID'];
$annonce=recuperer_annonce_par_id($annonceID);
$vendeur=$annonce['vendeurID'];
if(isset($_POST['methodeDePaiment'])){
  if($_POST['methodeDePaiment']=="ESPECES"){
    if($_COOKIE['userID']==$vendeur){
      echo "desole, vous etes vendeur"; 
    }
    else{
        $conversationID=$id;
        $destinataireID=($annonce['vendeurID']);
        $envoyeurID=($_COOKIE['userID']);
        $dateEnvoi=date('Y-m-d H:i:s');
        $text='MESSAGE DE CONFIRMATION DE ACHAT|VEND :
      <div id="confirmationDePaiment">
      <form action="confirmationPaiment.php?id='.$id.'" method="post" enctype="multipart/form-data">

                <label for="confiramtion">confirmez-vous?oui ou non</label>
                <select id="confirmation" name="confirmation">
                    <option value="oui">oui</option>
                    <option value="non">non</option>
                </select><br>
               <input type="submit" value="confirme">  
      </form>
      </div>
      ';
      sendConfirmation($envoyeurID, $destinataireID, $annonceID, $dateEnvoi, $text, $conversationID);
      header('location:../controllers/recevoirConversation.php?id='.$id);
      
    }
    }

  }
  else{
    echo "Methode de paiment non choisi";
  }
}
else{
  echo "annonce non selectee";
}
?>