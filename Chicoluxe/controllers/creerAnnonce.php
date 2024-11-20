
<?php
require_once "../models/connexionDB.php";
require_once "../models/utilisateur.php";
require_once "../models/annonce.php";
$pageTitle="SELL YOUR LUXURY ITEMS WITH CHICOLUXE.COM";
$pageKeyword="SELL LUXURY REAL ESTATE (LUXURY HOUSE ,LUXURY APPARTMENT), CAR, PRIVATE JET, YATCH, WATCH, HIGH VALUE COLLECTION ITEM ";
require_once "../views/header.php";
if (isset($_COOKIE["userID"]) == true) {

    if (
    isset($_POST["loueVendre"]) &&
    isset($_POST["categorie"]) &&
    isset($_POST["titre"]) &&
    isset($_POST["description"]) &&
    isset($_POST["prix"]) &&
    isset($_POST["etat"]) &&
    isset($_POST["region"]) &&
    isset($_FILES["photo"]["tmp_name"])
) 

{
    $loueVendre = $_POST["loueVendre"];
    $categorie = $_POST["categorie"];
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $prix = $_POST["prix"];
    $etat = $_POST["etat"];

    // Check if the file was successfully uploaded
    if ($_FILES["photo"]["error"] === UPLOAD_ERR_OK){
$photo = file_get_contents($_FILES["photo"]["tmp_name"]);
    }
   /* if ( $_FILES["photo1"]["error"]
     or $_FILES["photo2"]["error"] 
     or $_FILES["photo3"]["error"]
     or $_FILES["photo4"]["error"]) {
        $photo = file_get_contents($_FILES["photo"]["tmp_name"]);*/
    else {
            echo ("SORRY;"."("." AN ERROR OCCOURED WHILE LOADING YOUR PHOTO.</br>
            <a href='./creerAnnonce.php'>PLEASE RETRY</a>");
            exit;
        }
        // Check if the file was successfully uploaded
if (empty($_FILES['photo1']['tmp_name'])==false){
    if ($_FILES["photo1"]["error"] === UPLOAD_ERR_OK){
        $photo1 = file_get_contents($_FILES["photo1"]["tmp_name"]);
            }
           /* if ( $_FILES["photo1"]["error"]
             or $_FILES["photo2"]["error"] 
             or $_FILES["photo3"]["error"]
             or $_FILES["photo4"]["error"]) {
                $photo = file_get_contents($_FILES["photo"]["tmp_name"]);*/
            else {echo '<div id="errorNotification">';
            echo ("SORRY;"."("." AN ERROR OCCOURED WHILE LOADING YOUR PHOTO.</br>
            <a href='./creerAnnonce.php'>PLEASE RETRY</a>");
            exit;
        }
     }
     else{
        $photo1=null;
     }
 // Check if the file was successfully uploaded
 if (empty($_FILES['photo2']['tmp_name'])==false){
            if ($_FILES["photo2"]["error"] === UPLOAD_ERR_OK){
                $photo2 = file_get_contents($_FILES["photo2"]["tmp_name"]);
                    }
               
                    else {
            echo ("SORRY;"."("." AN ERROR OCCOURED WHILE LOADING YOUR PHOTO.</br>
            <a href='./creerAnnonce.php'>PLEASE RETRY</a>");
            exit;
        }
        }
        else{
            $photo2=null;
        }
    $region=$_POST["region"];
    $publishedDate = date('Y-m-d H:i:s');
    $vendeur =  recuperer_utilisateur_par_id($_COOKIE['userID']);
        try {
            creerAnnonce($conn,$loueVendre,$categorie,$titre,$description,$prix,$etat,$photo,$publishedDate,$vendeur,$photo1,$photo2, $region);
            header('location:../controllers/confirmerCreationAnnonce.php');
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
        

}else{
    
    require_once "../views/pageMettreAnnonce.php";
}

}
else {  
    echo '<div id="errorNotification">';
        echo 'YOU ARE NOT CONNECTED: </br> </br >';
        echo '<a href="../controllers/signUpRegister.php">
        <button class="pushable">
        <span class="front">
        LOG IN
        </button>
    </a></div>';
    exit;
    }
    


