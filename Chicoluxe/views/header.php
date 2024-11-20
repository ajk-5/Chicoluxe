<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
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
        <meta name="description" content="top worldwide market place foy luxury items, luxury cars, luxury real estates, private jets, luxury yatches, watches, etc. luxury club at its finest">

    </head>
  
    <body>  
    <?php require "../controllers/cookies.php"?>
    
<div class="header">
  <div class="titleProfilMessage" style="padding-left:10px">
                <div class="animate-charcter">
        <a href="../index.php" style="text-decoration:none">
            <div class='title' >
                <div class="title1">
                <span class="title-word title-word-1"><b>CHICO</b></span>
                </div>
                <div class=title2>
                    <span class="title-word title-word-2"><b>LUXE</b></span>
                </div>
            </div>
        </a>
                  <div  class="motto" style= "font-size:12px;"><b>Where Luxury Finds New Beginnings</b></div>
                </div>
    <div id="post" onmouseover="showMenu('menu post')" onmouseout="hideMenu('menu post')">
                    <a href="../controllers/creerAnnonce.php" style= 'text-decoration:none;'><img class="golden_filter" src="../images/post.svg" alt="" height=30px width=30px></a>
                    <div class='menu' id="menu post" style='display : none;'>
                        SELL WITH US
                    </div>
    </div>

                
    <div id="profilMessage" style='padding-right:2%'>
    
          
            <div id="search" onmouseover="showMenu('menu search')" onmouseout="hideMenu('menu search')">
                    <a href='./rechercheAnnonce.php' style= 'text-decoration:none;'><img class="golden_filter" src="../images/search.svg" alt="" height=30px width=30px>
                                  <div class='menu' id="menu search" style='display : none;'>
                                  SEARCH
                                  </div></a>
            </div> 

            <div id= "message" onmouseover="showMenu('menu message')" onmouseout="hideMenu('menu message')">
                      <a href="../controllers/afficherMesMessages.php" style= 'text-decoration:none;'><img class="golden_filter" src="../images/message.svg" alt="" height=30px width=30px>
            <div class='menu' id="menu message" style='display : none;'>
    MESSAGE
            </div></a>
    </div>
    <div id="profil" onmouseover="showMenu('menu profil')" onmouseout="hideMenu('menu profil')">
                <?php
                          if (isset($_COOKIE['userID'])){
                            echo '<a href="../controllers/afficherMesAnnonces.php" style="text-decoration:none;"><img class="golden_filter" src="../images/profile.svg" alt="" height=30px width=30px><div class="menu" id="menu profil" style="display : none;">PROFILE</div></a>';
                          }
                          else{
                          echo '<a href="../controllers/signUpRegister.php" style= "text-decoration:none;" > <img class="golden_filter" src="../images/connect.svg" alt="" height=30px width=30px><div class="menu" id="menu profil" style="display : none;">
    LOG IN
            </div></a>';
                          }
                ?>
    </div>
    <div id= "menu_side" onclick="showMenu('side_menu_hidden')" onclick="hideMenu('side_menu_hidden')">
                      <img class="golden_filter" src="../images/side_menu.svg" alt="" height=30px width=30px>
            <div class='side_menu' id="side_menu_hidden" style='display : none;'>
  <div class='footer'>
                      <div class="facebook">
                        <a href="https://www.facebook.com/profile.php?id=100076715385071"><img class="golden_filter" src='../images/facebook.svg' alt="facebook" style="width:auto; height:100%; max-height:30px " ></a>
                      </div>
                      <div class="instagram">
                      <a href="https://www.instagram.com/trueluxuryclub/"><img class="golden_filter" src='../images/instagram.svg' alt="instagram" style="width:auto; height:100%; max-height:30px" ></a>
                      </div>
                      <div class="tiktok">
                      <a href='https://www.tiktok.com/@trueluxury.club'><img class="golden_filter" src='../images/tiktok.svg' alt="twitter" style="width:auto; height:100%; max-height:30px" ></a>
                      </div>
</div>
            </div>
    </div>
  </div>              
</div>
<div class="headerMenu2">

<div class="menuContainer" onmouseover="showMenu('menu 1')" onmouseout="hideMenu('menu 1')">
    <a href="../controllers/afficherAnnonceParCategorie.php?id=REAL%20ESTATE"><img class="golden_filter" src="../images/realestate.svg" alt="" height=30px width=30px></a>
                <div class='menu' id="menu 1" style='display : none;'>
REAL ESTATE
        </div>
</div>
<div class="menuContainer 2" onmouseover="showMenu('menu 2')" onmouseout="hideMenu('menu 2')">
    <a href="./afficherAnnonceParCategorie.php?id=PRIVATE%20JETS" ><img class="golden_filter" src="../images/jet.svg" height=30px width=30px></a>
                <div class='menu' id="menu 2" style='display : none;'>
PRIVATE JETS
        </div>
</div>
<div class="menuContainer 3" onmouseover="showMenu('menu 3')" onmouseout="hideMenu('menu 3')">
    <a href="./afficherAnnonceParCategorie.php?id=yatch"><img class="golden_filter" src="../images/yatch.svg" alt="" height=30px width=30px></a>
                <div class='menu' id="menu 3" style='display : none;'>
YATCHES
        </div>
</div>
<div class="menuContainer 4" onmouseover="showMenu('menu 4')" onmouseout="hideMenu('menu 4')">
    <a href="./afficherAnnonceParCategorie.php?id=clothing"><img class="golden_filter" src="../images/clothing.svg" alt="" height=30px width=30px></a>
                <div class='menu' id="menu 4" style='display : none;'>
CLOTHINGS
        </div>
</div>
<div id="menuContaine 5" onmouseover="showMenu('menu 5')" onmouseout="hideMenu('menu 5')">
    <a href="./afficherAnnonceParCategorie.php?id=automobile"><img class="golden_filter" src="../images/automobile.svg" alt="" height=30px width=30px></a>
                <div class='menu' id="menu 5" style='display : none;'>
VEHICLES
        </div>
</div>

    <div id="menuContainer 7" onmouseover="showMenu('menu 7')" onmouseout="hideMenu('menu 7')">
        <a href="./afficherAnnonceParCategorie.php?id=collectible"><img class="golden_filter" src="../images/collectible.svg" alt="" height=30px width=30px></a>
        <div class='menu' id="menu 7" style='display : none;'>
                <a href="./afficherAnnonceParCategorie.php?id=watches" style= 'text-decoration:none;color:goldenrod;'><img class="golden_filter" src="../images/watch.svg" alt="" height=30px width=30px>WATCHES</a><br>
                <a href="./afficherAnnonceParCategorie.php?id=jewelleries" style= 'text-decoration:none;color:goldenrod;' ><img class="golden_filter" src="../images/jewelry.svg" alt="" height=30px width=30px >JEWELLERIES</a><br>
                <a href="./afficherAnnonceParCategorie.php?id=antiques" style= 'text-decoration:none;color:goldenrod;'> <img class="golden_filter" src="../images/antiques.svg" alt="" height=30px width=30px>ANTIQUES</a><br>
        </div>
    </div>
<div id="menuContainer 6" onmouseover="showMenu('menu 6')" onmouseout="hideMenu('menu 6')">
    <a href="./afficherAnnonceParCategorie.php?id=investment"><img class="golden_filter" src="../images/investment.svg" alt="" height=30px width=30px></a>
            <div class='menu' id="menu 6" style='display : none;'>
INVESTMENTS
        </div>
</div>
<!------------------hidden----------------------------------------------->
    <script>
    function showMenu(menu) {
        document.getElementById(menu).style.display = "block";
    }
    
    function hideMenu(menu) {
        document.getElementById(menu).style.display = "none";
    }
    </script>


</div>



</div>
</div>
</div>
<div class='container' style="padding-top:100px">
</div>
<div class='footer'>
                      <div class="facebook">
                        <a href="https://www.facebook.com/profile.php?id=100076715385071"><img class="golden_filter" src='../images/facebook.svg' alt="facebook" style="width:auto; height:100%; max-height:30px " ></a>
                      </div>
                      <div class="instagram">
                      <a href="https://www.instagram.com/trueluxuryclub/"><img class="golden_filter" src='../images/instagram.svg' alt="instagram" style="width:auto; height:100%; max-height:30px" ></a>
                      </div>
                      <div class="tiktok">
                      <a href='https://www.tiktok.com/@trueluxury.club'><img class="golden_filter" src='../images/tiktok.svg' alt="twitter" style="width:auto; height:100%; max-height:30px" ></a>
                      </div>
</div>
