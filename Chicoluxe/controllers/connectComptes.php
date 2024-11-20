<?php 
require_once "../models/connexionDB.php";
require "../models/utilisateur.php";

/*require_once "../views/header.php";*/

if( isset($_POST["email"]) && isset($_POST["motDePasse"])){
$email= $_POST["email"];
$verifyUtilisateurExists=recuperer_utilisateur_par_email($_POST['email']);
if($verifyUtilisateurExists)
{
        
    $motDePasse = $_POST["motDePasse"];
        if (empty($email) or empty($motDePasse)){
            echo "<div id='errorNotification'>veuillez remplir toutes les cases <div>";
            require_once "./signUpRegister.php";
        }


        $password= recuperer_utilisateur_par_email($_POST['email']);


        if (password_verify($motDePasse, $password['Mot_de_passe'])) {

        $utilisateur = recuperer_utilisateur_par_email($_POST["email"]);

        setcookie('userID', $utilisateur['ID']);





        
        header("location:../controllers/choisirPurpose.php");

        }

    else{

        echo ("<div id='errorNotification'>PASSWORD OR EMAIL INCORRECT. PLEASE RETRY.</div></br>");
        require_once "./signUpRegister.php";
        echo ("<div id='errorNotification'>PASSWORD OR EMAIL INCORRECT. PLEASE RETRY.</div></br>");
    }
}
else{
    echo "<div id='errorNotification'>ACCOUNT DOES NOT EXISTS</div>";
    echo '<a href="../controllers/signUpRegister.php">
    <button class="pushable">
    <span class="front">
    RETRY
    </button>
</a></br>';
    
}
}else{
    require_once "./signUpRegister.php";
}




// 1ère méthode : redirection HTTP
//header("Location: afficherAnnonce.php");

// 2ème méthode :
//utilise'

// 3ème méthode :
// require_once "afficher_accueil.php";

?>
