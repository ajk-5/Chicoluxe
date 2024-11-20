<?php
function evaluateUtilisateur($evaluateurID, $evaluee, $annonceID, $date, $etoiles, $commentaire){
    require "connexionDB.php";
    $sql=$conn->prepare("INSERT INTO evaluation(commentaire, date_commentaire, etoiles, evaluateurID, person_evaluee ,annonceID) VALUES (?,?,?,?,?,?)");
    $sql->bindParam(1,$commentaire);
    $sql->bindParam(2,$date);
    $sql->bindParam(3,$etoiles);
    $sql->bindParam(4,$evaluateurID);
    $sql->bindParam(5,$evaluee);
    $sql->bindParam(6,$annonceID);

    $sql->execute();
    return;
}

function verifyEvaluationExists($evaluateurID, $annonceID){
    require "connexionDB.php";
    $sql=$conn->prepare("SELECT * FROM evaluation WHERE evaluateurID = $evaluateurID AND annonceID=$annonceID");
    $sql->execute();
    $resultat=$sql->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
}

