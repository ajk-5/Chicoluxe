<?php
require_once "../models/connexionDB.php";
require_once "../models/utilisateur.php";
require_once "../models/annonce.php";
require_once "../views/header.php";

?>

<h1>Mes annonces</h1>

<?php
if (isset($_COOKIE['userID'])){

try {
    $userID = $_COOKIE['userID'];
    echo 'déconnexion.';
    echo"<a href='../controllers/deconnecter.php'>
    <button class='pushable'>
    <span class='front'>
    déconnexion
    </span>
        </button>
</a>";

    recupereAnnonceParVendeurID($conn, $userID);
    $rows=recupereAnnonceParVendeurID($conn, $userID);
    // Vérifier s'il y a des annonces
    if ($rows->rowCount() > 0) {
        echo "<div id='lesAnnonces'>";
        foreach ($rows as $row) {
            require "../views/PageMesAnnonce.php";
        }
        echo "</div>";
    } else {
        echo 'Aucune annonce trouvée.';
        echo"<a href='../controllers/creerAnnonce.php'>
        <button class='pushable'>
        <span class='front' style= width:520px>
                METTRE UNE ANNONCE
            </button>
    </a>";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

$conn = null;
}
else{
    echo "vous etes pas connectee";
    echo '<a href="../controllers/signUpRegister.php">
    <button class="pushable">
    <span class="front" style= width:420px>
    connectez-vous
    </button>
</a></br>';
exit; 
}
?>

</body>
</html>
