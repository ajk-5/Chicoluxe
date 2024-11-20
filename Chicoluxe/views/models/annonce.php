<?php
function recupereAnnonces($categorie){
    require "connexionDB.php";
    if(empty($categorie)){
    $sql= $conn->prepare("SELECT * FROM annonce WHERE loueVendre='Vendre' ORDER BY DATE_PUBLICATION desc");
    $sql->execute();
    $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
    }
    else{
        $sql= $conn->prepare("SELECT * FROM annonce WHERE nom_de_categorie=$categorie ORDER BY DATE_PUBLICATION desc");
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultat;    
    }
}
function recuperer_annonce_par_id($id) {
    require "connexionDB.php";
    $requete = $conn->prepare("SELECT * FROM annonce WHERE annonceID = ?");
    $requete->execute(array($id));
    $resultat = $requete->fetch();

    if($resultat !== false) {
        return $resultat;
    } else {
        echo "annonce n'existe pas";
        return null;
    }
}
 function creerAnnonce($conn,$loueVendre,$categorie,$titre,$description,$prix,$etat,$photo,$publishedDate,$vendeur,$photo1,$photo2,$region){
    $accountData = $conn->prepare("INSERT INTO annonce(loueVendre, nom_de_categorie, TITRE, description, prix, etat, photos, DATE_PUBLICATION, vendeurID, photo1,photo2, region) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?)");
    $accountData->bindParam(1, $loueVendre);
    $accountData->bindParam(2, $categorie);
    $accountData->bindParam(3, $titre);
    $accountData->bindParam(4, $description);
    $accountData->bindParam(5, $prix);
    $accountData->bindParam(6, $etat);
    $accountData->bindParam(7, $photo, PDO::PARAM_LOB);
    $accountData->bindParam(8, $publishedDate);
    $accountData->bindParam(9, $vendeur['ID']);
    
    $accountData->bindParam(10, $photo1, PDO::PARAM_LOB);
   
    $accountData->bindParam(11, $photo2, PDO::PARAM_LOB);
    $accountData->bindParam(12, $region);



    $accountData->execute();
    $accountData->closeCursor();
   return;
 }

 function supprimerLesAnnonce($id){
    require "connexionDB.php";
    $delete= $conn->prepare("DELETE FROM annonce WHERE annonceID=$id");
    $delete->execute();
    return;
}
 

 function getUtilisateurByAnnonce($annonceID){
    require "connexionDB.php";
    $requete = $conn->prepare("SELECT vendeurID FROM annonce WHERE annonceID = ?");
    $requete->execute(array($annonceID));
  
  $resultat = $requete->fetch();
 }
 function recupereAnnonceParVendeurID($conn,$userID){
 $sql = $conn->prepare("SELECT * FROM annonce WHERE vendeurID = ?");
 $sql->bindParam(1, $userID);
 $sql->execute();
 return $sql;
}

function searchAnnonce( $mot, $categorie, $group, $order, $region){
         require "connexionDB.php";

    if (empty($categorie)==false && empty($group)==false && empty($region)==false ){
        $sql=$conn->prepare("SELECT * FROM annonce WHERE nom_de_categorie=? AND  region = ? AND TITRE LIKE CONCAT('%', ?, '%') ORDER BY $group $order");
        $sql->bindParam(1, $categorie);
        $sql->bindParam(2, $region);
        $sql->bindParam(3, $mot);
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;    

    }
    elseif(empty($categorie)==false && empty($region)==false && empty($group)){
        $sql=$conn->prepare("SELECT * FROM annonce WHERE nom_de_categorie=? AND region=? AND TITRE LIKE CONCAT('%', ?, '%')");
        $sql->bindParam(1, $categorie);
        $sql->bindParam(2, $region);
        $sql->bindParam(3, $mot);
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;  
    }
    elseif(empty($categorie)==false && empty($region) && empty($group)){
        $sql=$conn->prepare("SELECT * FROM annonce WHERE nom_de_categorie=? AND TITRE LIKE CONCAT('%', ?, '%')");
        $sql->bindParam(1, $categorie);
        $sql->bindParam(2, $mot);
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;  
    }
        elseif(empty($categorie) && empty($region)==false && empty($group)){
            $sql=$conn->prepare("SELECT * FROM annonce WHERE region=? AND TITRE LIKE CONCAT('%', ?, '%')");
            $sql->bindParam(1, $region);
            $sql->bindParam(2, $mot);
            $sql->execute();
            $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;  
    }
    else{
        $sql=$conn->prepare("SELECT * FROM annonce WHERE TITRE LIKE CONCAT('%', ?, '%') ORDER BY $group $order ");
        $sql->bindParam(1, $mot);
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }
}

function recupererAnnonceParCategorie($categorie){
    require 'connexionDB.php';
    $sql=$conn->prepare("SELECT * FROM annonce WHERE nom_de_categorie=? ORDER BY DATE_PUBLICATION desc ");
    $sql->bindParam(1, $categorie);
    $sql->execute();
    $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;    
}

function insertAcheteur($acheteurID, $annonceID){
        require 'connexionDB.php';
        $sql = $conn->prepare("UPDATE annonce SET acheteurID=$acheteurID WHERE annonceID = $annonceID") ;
        $sql->execute();
        return;
}
function modifierAnnonce($nouveauLoueVendre,$nouveauTitre,$nouvelleCategorie,$nouveauPrix,$nouvelleDescription,$annonceId){
    require "connexionDB.php";
    $sql = "UPDATE annonce SET loueVendre = :nouveauLoueVendre, TITRE = :nouveauTitre, nom_de_categorie = :nouvelleCategorie, prix = :nouveauPrix, description = :nouvelleDescription WHERE annonceID = :annonceId";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nouveauLoueVendre', $nouveauLoueVendre);
    $stmt->bindParam(':nouveauTitre', $nouveauTitre);
    $stmt->bindParam(':nouvelleCategorie', $nouvelleCategorie);
    $stmt->bindParam(':nouveauPrix', $nouveauPrix);
    $stmt->bindParam(':nouvelleDescription', $nouvelleDescription);
    $stmt->bindParam(':annonceId', $annonceId);
    $stmt->execute();
    return;
}
function recupereLouerBenevolat($loueVendBenevolat){
    require "connexionDB.php";
 
    $sql= $conn->prepare("SELECT * FROM annonce WHERE loueVendre= ? ORDER BY DATE_PUBLICATION desc");
    $sql->bindParam(1, $loueVendBenevolat);
    $sql->execute();
    $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;

}