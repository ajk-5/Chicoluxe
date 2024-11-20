<?php
require_once "../models/annonce.php";
require_once "../models/message.php";


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $message=recupererMessageParConversationID($id);
    $annonceID=$message[0]['annonceID'];
    $annonce=recuperer_annonce_par_id($annonceID);
    $vendeur=$annonce['vendeurID'];
    $conversationID=$id;
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
        if (isset($_POST['confirmation'])){
                    if ($_COOKIE['userID']==$vendeur){
                            if($_POST['confirmation']=='oui')
                            {
                                        $acheteurID=$message[0]['envoyeurID'];
                                        
                                        insertAcheteur($acheteurID, $annonceID);
                                        deleteConfirmation($text, $conversationID);
                                        
                                        $conversationID=$id;
                                        $destinataireID=($annonce['acheteurID']);
                                        $envoyeurID=($_COOKIE['userID']);
                                        $dateEnvoi=date('Y-m-d H:i:s');
                                        $text='<a href=../controllers/evaluation/submitEvaluation.php?id='.$annonceID.'>EVALUER CETTE TRANSACTION</a>';
                                        
                                        sendConfirmation($envoyeurID, $destinataireID, $annonceID, $dateEnvoi, $text, $conversationID);
                                        
                                        header('location:recevoirConversation.php?id='.$id);
                            }else{
                                
                                deleteConfirmation($text, $conversationID);
                                header('location:recevoirConversation.php?id='.$id);
                            }     
                    }else{
                        echo "MESSAGE EST ENVOYEE A VENDEUR!!!!MERCI DE AVOIR PATIENTEZ";
                    }
        }else{
            echo "Aucune option selectee";
        }
    
}else{
    echo "Erreur";
}
?>