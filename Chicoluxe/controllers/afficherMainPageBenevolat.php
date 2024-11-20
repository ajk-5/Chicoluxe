<?php
require_once "../models/annonce.php";
require_once "../models/utilisateur.php";
require_once '../views/header.php';

if(isset($_COOKIE['userID']))
{
    require_once "../views/pageHeadBenevolat.php";
}
else{
    echo "vous n'etes pas connectee pour voir les benevolat <br><br>";
    echo '<a href="../controllers/signUpRegister.php">
    <button class="pushable">
    <span class="front" style= width:420px>
    connectez-vous
    </button>
</a></br>';
exit;
    }