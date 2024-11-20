<?php 

require "../models/connexionDB.php";
require_once "../models/annonce.php";
require_once "../models/utilisateur.php";
require_once "../models/message.php";
require_once "../views/header.php";



if(isset($_COOKIE['userID'])){
if (isset($_GET['id'])) {
$id = $_GET['id'];}
$annonceID= recuperer_annonce_par_id($id);
$destinaireID=($annonceID['vendeurID']);
$envoyeur=($_COOKIE['userID']);
$destinataire = recuperer_utilisateur_par_id($destinaireID);
$dateEnvoi=date('Y-m-d H:i:s');
$conversationID=$annonceID['annonceID'].$destinaireID.$envoyeur;
if (isset($_POST['message'])){
    if( empty($_POST['message']==false)) {
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
    sendMessage($conn,$envoyeur,$destinataire,$annonceID,$dateEnvoi,$file,$text, $conversationID);
    header('location:../controllers/recevoirConversation.php?id='.$conversationID);
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

 $conn = null;

}else{
 
}

require_once "../views/messagerie.php";
}else{
    echo "vous etes pas connectee";
}



?>