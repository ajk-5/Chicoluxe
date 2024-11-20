<?php
     
     echo "<div  class ='annonceDetailled' style='width:451px;'>"; 
     echo '<div><b>Category:'.$row['nom_de_categorie'].'<br></div>';
     echo '<div> <span class="pushable"><b>à ' .$row['louevendre'].'</b></span></div>' ;
    echo '<div class="annonceImages" style="height:451px; width:451px">';
   echo '<img src="data:image/jpeg;base64,' . base64_encode($row['photos']) . '" width="450" height="450" alt="Image"> ';  
     if (isset($row['photo1'])){
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['photo1']) . '" width="450" height="450" alt="Image">';
    }
    if (isset($row['photo2'])){
        echo'<img src="data:image/jpeg;base64,' . base64_encode($row['photo2']) . '" width="450" height="450" alt="Image">';}

    echo "</div>";
     if (isset($_COOKIE['userID'])){
        if(empty($row['acheteurID'])){
        echo " <br><a href='../controllers/envoiMessage.php?id={$row['annonceID']}'><button class='pushable'>
        <span class='front'>
         envoyer message
        </span>
      </button></a>";
        }
        else{
           echo" <button class='pushable'>
        <span class='front'>
         ARTICLE VENDU
        </span>
      </button>";
        }
     }
     echo '<div><b> ' . $row['TITRE'] . '</b></br></div>';
     echo '<div><b>Prix : <span style="color:green">€'. $row['prix'] . '</span></b></div>';
     $vendeur=recuperer_utilisateur_par_id($row['vendeurID']);
     $rating=recupererEvaluationParUtilisateurID($row['vendeurID']);
     echo '<div><b> vendeur : '.$vendeur["pseudo"]."  (".$rating.'⭐)</b></div>';
     echo '<div><b>Etat : '. $row['etat'] . '</b> </div>';
     echo '<div><b>Date Publie : </b>'.$row['DATE_PUBLICATION'] .'</div>';
     echo '<div><b>Description : </b><br>' . $row['description']."</div>";
 
     echo '<div>';
