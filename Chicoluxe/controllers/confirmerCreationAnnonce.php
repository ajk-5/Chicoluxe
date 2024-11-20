<?php
require_once '../views/header.php';
echo '<div id="notification">annonce mise avec succes.</div></br><br>
<a href=../controllers/bienvenueVisiteur.php> <button class="pushable">
                <span class="front" style= width:420px>
                Retour à la page d’accueil
                </button>
            </br>';
echo '<a href=../controllers/afficherAnnonce.php>  <button class="pushable">
        <span class="front" style= width:420px>
        voir les annonces
        </button></a>
            </br>';
             exit;