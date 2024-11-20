<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initail-scale=1.0">
        <title>Acceuil Membre</title>
        <link rel="stylesheet" href="./esieaccasion.css">
    </head>
    <body>
    <?php


$email= $_POST["email"];
$motDePasse = $_POST["motDePasse"];
 
$email = mysqli_real_escape_string($conn, $email);
$motDePasse= mysqli_real_escape_string($conn, $motDePasse);

$sql = "SELECT * FROM users WHERE email='$email' AND motDePasse='$motDePasse'";
$result = $conn->query($sql);

if ($result->numRows> 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Logged in as: " . $row["email"]. "<br>";
  }
} else {
  echo "compte non cree";
}
$conn->close();
?>
        <div id="annonce">
            <div id="acheter"><a href="./pageAchat.php"><b>acheter</b></a></div>
            <div id="vendre"><a href='./pageVente.php'><b>vendre</b></a></div>
            <div id="louer"><a href="./pageLouer.php"><b>louer</b></div>
            <div id="benevolat"><a href="./pageBenevolat.php"><b>benevolat</b></div>
            <div id="mettreAnnonce"><a href="./pageMettreAnnonce"><b>mettre une annonce</b></div>  
        </div>
        
    </body>
</html>