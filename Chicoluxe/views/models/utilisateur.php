<?php
function recuperer_utilisateur_par_email($email) {
    require "../models/connexionDB.php";
    $requete = $conn->prepare("SELECT * FROM utilisateur WHERE email = ?");
    $requete->execute(array($email));
    $resultat = $requete->fetch();

    if($resultat !== false) {
        return $resultat;
    } else {

        return null;
    }
}

function recuperer_utilisateur_par_id($id) {
    require "connexionDB.php";
    $requete = $conn->prepare("SELECT * FROM utilisateur WHERE id = ?");
    $requete->execute(array($id));
    $resultat = $requete->fetch();

    if($resultat !== false) {
        return $resultat;
    } else {
        // Handle the case where no user was found with the provided id
        echo "veuillez creer un compte. ";
        require_once "../controllers/signUpRegister.php";
        return null;
    }
}

function recuperer_pseudo($emailConn) {
    require "connexionDB.php";
    $requete = $conn->prepare("SELECT pseudo FROM utilisateur WHERE email = ?");
    $requete->execute(array($emailConn));
    if ($requete->rowcount()>0){
    
    $row = $requete->fetch(PDO::FETCH_ASSOC);
        $pseudoConn= $row['pseudo'];
        return $pseudoConn;
    } else {
        echo "vous n'avez pas compte";
        echo '<a href="../controllers/signUpRegister.php">
        <button class="pushable">
        <span class="front" style= width:420px>
        connectez-vous
        </button>
        </a></br>';
       
        return null;
    }
}


function registration($conn,$nom,$prenom,$email,$dob,$motDePasse,$pseudo){
    $accountData = $conn->prepare("INSERT INTO utilisateur(nom, prenom, email, DOB, mot_de_passe, pseudo) VALUES (?, ?, ?, ?, ?, ?)");

    $accountData->bindParam(1, $nom);
    $accountData->bindParam(2, $prenom);
    $accountData->bindParam(3, $email);
    $accountData->bindParam(4, $dob);
    $accountData->bindParam(5, $motDePasse);
    $accountData->bindParam(6, $pseudo);


    $accountData->execute();

    echo 'compte créé avec succès';
    echo '<a href="../controllers/signUpRegister.php">
    <button class="pushable">
    <span class="front" style= width:420px>
    connectez-vous
    </button>
    </a></br>';
    exit;
}

function recupererEvaluationParUtilisateurID($id){
    require 'connexionDB.php';
    $sql=$conn->prepare("SELECT AVG(etoiles) AS averageRating From evaluation where person_evaluee=?");
    $sql->bindParam(1, $id,PDO::PARAM_INT);
    $sql->execute();
    $resultat=$sql->fetch(PDO::FETCH_ASSOC);
    return number_format($resultat['averageRating'], 1);
}