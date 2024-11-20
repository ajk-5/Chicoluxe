<?php
function sendMessage($conn, $envoyeur, $destinataire, $annonceID, $dateEnvoi,$file,$text, $conversationID ){
    require "connexionDB.php";
    $accountData = $conn->prepare("INSERT INTO message(envoyeurID, destinataireID, annonceID, date_envoi, contenu, text, conversationID) 
    VALUES (?, ?, ?, ?,?,?,?)");
    $accountData->bindParam(1, $envoyeur);
    $accountData->bindParam(2, $destinataire['ID']);
    $accountData->bindParam(3, $annonceID['annonceID']);
    $accountData->bindParam(4, $dateEnvoi);
    $accountData->bindParam(5, $file, PDO::PARAM_LOB);
    $accountData->bindParam(6, $text);
   $accountData->bindParam(7, $conversationID);

    $accountData->execute();
    $accountData->closeCursor();
 }
 function sendConversation($conn, $envoyeur, $destinataire, $annonceID, $dateEnvoi,$file, $text, $conversationID ){
   require "connexionDB.php";
   $accountData = $conn->prepare("INSERT INTO message(envoyeurID, destinataireID, annonceID, date_envoi, contenu, text, conversationID) 
   VALUES (?, ?, ?, ?,?,?,?)");
   $accountData->bindParam(1, $envoyeur);
   $accountData->bindParam(2, $destinataire);
   $accountData->bindParam(3, $annonceID);
   $accountData->bindParam(4, $dateEnvoi);
   $accountData->bindParam(5, $file, PDO::PARAM_LOB);
   $accountData->bindParam(6, $text);
   $accountData->bindParam(7, $conversationID);

   $accountData->execute();
   $accountData->closeCursor();
 }

 function afficherMessage($conn, $envoyeur, $destinataire, $annonceID ){
    require "connexionDB.php";
    $accountData = $conn->prepare("SELECT * FROM message WHERE envoyeurID = ? AND destinataireID = ? AND annonceID = ? ORDER BY date_envoi desc");
    $accountData->bindParam(1, $envoyeur);
    $accountData->bindParam(2, $destinataire['ID']);
    $accountData->bindParam(3, $annonceID['annonceID']);

    $accountData->execute();

    $resultat = $accountData->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
    
 }
 function afficherConversation($conn, $conversationID ){
   require "connexionDB.php";
   $accountData = $conn->prepare("SELECT * FROM message WHERE conversationID = ? ORDER BY date_envoi desc");
   $accountData->bindParam(1, $conversationID);
 
   $accountData->execute();

   $resultat = $accountData->fetchAll(PDO::FETCH_ASSOC);
   return $resultat;
   
}
 
 function afficherMesMessages($conn){
   require "connexionDB.php";
   $accountData = $conn->prepare("SELECT * FROM message WHERE envoyeurID = ? OR destinataireID = ? GROUP BY conversationID ORDER BY date_envoi desc ");
   $accountData->bindParam(1, $_COOKIE['userID']);
   $accountData->bindParam(2, $_COOKIE['userID']);
   

   $accountData->execute();

   $resultat = $accountData->fetchAll(PDO::FETCH_ASSOC);
   return $resultat;
   
}
 function getEnvoyeur($envoyeurID){
    require "connexionDB.php";
    $requete = $conn->prepare("SELECT * FROM message WHERE envoyeurID = ?");
    $requete->execute(array($envoyeurID));
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
 }
 function getDestinataire($destinataireID){
    require "connexionDB.php";
    $requete = $conn->prepare("SELECT * FROM message WHERE destinataireID = ?");
    $requete->execute(array($destinataireID));
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
 }
 function recupererMessageParConversationID($id){
    require "connexionDB.php";
    $requete = $conn->prepare("SELECT * FROM message WHERE conversationID = ? GROUP BY conversationID ORDER BY date_envoi desc");
    $requete->execute(array($id));
    $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
 }
 function sendConfirmation($envoyeur, $destinataire, $annonceID, $dateEnvoi, $text, $conversationID ){
   require "connexionDB.php";
   $accountData = $conn->prepare("INSERT INTO message(envoyeurID, destinataireID, annonceID, date_envoi, text, conversationID) 
   VALUES (?, ?, ?, ?,?,?)");
   $accountData->bindParam(1, $envoyeur);
   $accountData->bindParam(2, $destinataire);
   $accountData->bindParam(3, $annonceID);
   $accountData->bindParam(4, $dateEnvoi);
   $accountData->bindParam(5, $text);
   $accountData->bindParam(6, $conversationID);

   $accountData->execute();
   $accountData->closeCursor();
 }
 
 function deleteConfirmation($text, $conversationID){
   require "connexionDB.php";
   $sql=$conn->prepare("DELETE FROM message WHERE conversationID=? AND text LIKE ?");
   $sql->bindParam(1, $conversationID);
   $sql->bindValue(2, "%".$text."%");
     
   $sql->execute();
 }