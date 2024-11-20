<?php 
if (isset($_POST['submit'])){
    if($_POST['submit']=='oui'){
        setcookie('userID', null);
        header('location:../controllers/signUpRegister.php');
    }else{
        header('location:../controllers/afficherMesAnnonces.php');
    }
}
else{
 require_once "../views/butonConfirmationdeconnecter.php";
}