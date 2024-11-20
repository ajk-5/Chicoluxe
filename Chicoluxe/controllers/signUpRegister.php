<?php 
require_once "../models/connexionDB.php";
require_once "../models/utilisateur.php";
$pageTitle= "LOG IN AND REGISTER | BECOME PART OF THE LUXURY CLUB";

require_once "../views/header.php";

if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["motDePasse"]) &&
    isset($_POST["dob"]) &&
    isset($_POST["pseudo"])
) {


$nom=$_POST["nom"];
$prenom = $_POST["prenom"];
$email= $_POST["email"];
$motDePasse = password_hash($_POST["motDePasse"], PASSWORD_DEFAULT);
$dob=$_POST["dob"];
$pseudo=$_POST["pseudo"];

if(empty($nom) or empty($prenom) or empty($email) or empty($dob) or empty($pseudo)){
if ($nom=''){
echo "<div id='errorNotification'>please enter your last name</div>";
exit;
}
if (empty($prenom)){
echo "<div id='errorNotification'>plaese enter your name</div>";
exit;
}
if (empty($email)){
 echo "<div id='errorNotification'>Please enter your email</div>";
 exit;
}
if(empty($motDePasse)){
echo"<div id='errorNotification'>Password cannot be empty</div>";
exit;
}

if (empty($pseudo)){
    echo "<div id='errorNotification'>Please enter your username</div>";
}
}
else{
try {
    registration($conn,$nom,$prenom,$email,$dob,$motDePasse,$pseudo);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
$conn = null; // Close the database connection
}
else{
echo "Please fill in all the boxes before submitting";
require_once "../views/pageAcceuil.php";
require_once "../controllers/afficherAnnonce.php";
    
}

?>