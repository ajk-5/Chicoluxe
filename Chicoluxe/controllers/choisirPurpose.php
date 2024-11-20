<?php
require_once "../models/utilisateur.php";
require_once "../views/header.php"; 



if (isset($_COOKIE['userID'])){
         $utilisateur= recuperer_utilisateur_par_id($_COOKIE['userID']);
            echo '<h1> Bienvenue '. $utilisateur['pseudo'] .', que souhaitez-vous?<h1>';
        }
else{
            echo "<h1> Bonjour , Vous n'".'est pas connectee';
            echo '<a href="../controllers/signUpRegister.php">
            <button class="pushable">
            <span class="front" style= width:420px>
            connectez-vous
            </button>
            </a></br></h1>';
             exit;
};
        

        require_once "../views/pageChoix.php";
