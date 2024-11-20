<?php
if (isset($_POST['submit'])){
    
    require_once('../controllers/creerAnnonce.php');
}
else{
    require_once "../views/header.php";
    require_once('../views/pageAnnoncerBenevolat.php');
}