<?php
require "./controllers/cookies.php";

	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="canonical" href="https://www.chicoluxe.com/" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content=<?php
                if (empty($pageKeyword)){
            echo '"Chicoluxe | Where Luxury Finds New Beginnings | luxury marketplace"';
        }
        else{
            echo '"'.$pageKeyword.'"';
        }
        ?> >
        <title>
    <?php 
        if(empty($pageTitle)){
        echo "CHICOLUXE : Where Luxury Finds New Beginnings";
        }
        else{
        echo $pageTitle;
        };?></title>

        <link rel="icon" href="../images/logo.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../chicoluxe.css">
        <link rel="stylesheet" href="../Header.css">
        <link rel="stylesheet" href="../index.css">
        <meta name="description" content="ChicoLuxe is high-end fashion or luxury items aimed at a younger demographic or with a playful, youthful aesthetic. It could also be the name of a brand or a product line.top worldwide market place foy luxury items, luxury cars, luxury real estates, private jets, luxury yatches, watches, etc. luxury at its finest">

    </head>
    

  
    <body style='font-family: "Barlow", sans-serif;
  font-weight: 400;
  font-style: normal;
  font-size: medium;
  background-color:#012b2d;'> 
         

<div class="index_header" style= 'background-color:#012b2d; color:#EBB42C;' >
    <div class="titleProfilMessage" style="padding-left:10px ">
                <div class="animate-charcter">
        <a href="./" style="text-decoration:none; font-size:24px">
            
<div class="logo">
      <img src="./images/CHICOLUXELOGO.png" alt="CHICOLUXE" style="width:auto; height:auto; max-height:100px">
    </div></a>
    </div>
  
      <div id="chicoluxe" style="
    color:#012b2d; 
    background:linear-gradient(180deg, #d1af5c, #a17c24 70.71%);">
<div class="container_chicoluxe" >
        <div class="website_name"><h1 style= 'color:#012b2d;'>CHICOLUXE</h1></div>
</div>
</div>

                
    <div id="profilMessage" style='padding-right:2%'>
    
          
            <div id="search" onmouseover="showMenu('menu search')" onmouseout="hideMenu('menu search')">
                    <a href='../controllers/rechercheAnnonce.php' style= 'text-decoration:none;'><img class="golden_filter" src="../images/search.svg" alt="SEARCH FOR ANNOUNCES" height=30px width=30px>
                                  <div class='menu' id="menu search" style='display : none;'>
                                  SEARCH
                                  </div></a>
            </div> 

            <div id= "message" onmouseover="showMenu('menu message')" onmouseout="hideMenu('menu message')">
                      <a href="../controllers/afficherMesMessages.php" style= 'text-decoration:none;'><img class="golden_filter" src="../images/message.svg" alt="chat" height=30px width=30px>
            <div class='menu' id="menu message" style='display : none;'>
    MESSAGE
            </div></a>
    </div>
    <div id="profil" onmouseover="showMenu('menu profil')" onmouseout="hideMenu('menu profil')">
                <?php
                          if (isset($_COOKIE['userID'])){
                            echo '<a href="../controllers/afficherMesAnnonces.php" style="text-decoration:none;"><img class="golden_filter" src="../images/profile.svg" alt="your profile" height=30px width=30px><div class="menu" id="menu profil" style="display : none;">PROFILE</div></a>';
                          }
                          else{
                          echo '<a href="../controllers/signUpRegister.php" style= "text-decoration:none;" > <img class="golden_filter" src="../images/connect.svg" alt="log in" height=30px width=30px><div class="menu" id="menu profil" style="display : none;">
    LOG IN
            </div></a>';
            
                          }
                ?>
    </div>
  </div>              
</div>
</div>


<div class='container' style="padding-top:120px">
</div>
   
        <script>
    function showMenu(menu) {
        document.getElementById(menu).style.display = "block";
    }
    
    function hideMenu(menu) {
        document.getElementById(menu).style.display = "none";
    }
    </script>

<?php
require_once "./models/annonce.php";
require_once "./models/utilisateur.php";
require_once "./views/pageChoix.php";
require_once "./views/bienvenue_main.php";

try {
    $categorie = "REAL ESTATE";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }

    $categorie = "YATCH";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }

    $categorie = "CLOTHING";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }

    $categorie="PRIVATE JET";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }
    $categorie="VEHICLE";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }
    $categorie="COLLECTIBLES";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }
   /* $categorie="";
    $rows= recupererAnnonceParCategorie($categorie);
    if(empty($rows)==false){
    echo "categorie : ".$categorie;
    echo "<div class='lesAnnoncesParCategorie'>";
    require '../views/PageAnnonceParCategorie';
    echo "</div>";
    }*/


    
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

$conn = null;
?>
