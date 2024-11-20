<?php 

require "../models/connexionDB.php";
require_once "../models/annonce.php";
require_once "../models/utilisateur.php";
require_once "../models/message.php";


if(isset($_COOKIE['userID'])){
if (isset($_GET['id'])) {
$id = $_GET['id'];}
$message= recupererMessageParConversationID($id);
$destinataireID= $message[0]["destinataireID"];
$envoyeur=($_COOKIE['userID']);
$destinataire = $destinataireID;
$dateEnvoi=date('Y-m-d H:i:s');
$conversationID=$id;
$annonceID=$message[0]["annonceID"];

if ( isset($_POST['message'])){
    if (empty($_POST['message'])==false){
       
     $text=$_POST['message'];
    }else{
        $text=null;
    }

    if (empty($_FILES['files'])==false){
       
        if ($_FILES["files"]["error"] === UPLOAD_ERR_OK){
            $file= file_get_contents($_FILES["files"]["tmp_name"]);
            
                }
                else {
                        $file=null;
                }  
        
        }
        else{
        $file=null;
        }
     try {
    if($destinataire == $_COOKIE['userID']){
    $envoyeur=$destinataire;
    $destinataire=$message[0]["envoyeurID"];;
    sendConversation($conn,$envoyeur,$destinataire,$annonceID,$dateEnvoi,$file,$text, $conversationID);
    header('location:recevoirConversation.php?id='.$id);
    }
    else{
        sendConversation($conn,$envoyeur,$destinataire,$annonceID,$dateEnvoi,$file,$text, $conversationID);
        header('location:recevoirConversation.php?id='.$id);   
    }
   } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
   }
   require_once "../views/conversation.php";}

 $conn = null;

}else{

    

    echo "vous etes pas connectee";
    echo '<a href="../controllers/signUpRegister.php">
    <button class="pushable">
    <span class="front" style= width:420px>
    connectez-vous
    </button>
</a></br>';
exit;
}



?>