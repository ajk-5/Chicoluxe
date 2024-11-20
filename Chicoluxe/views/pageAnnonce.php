<?php
 echo "<div  class ='annonces'style=' width=350px; height=350px'>";
 /* echo '<b>Description:</b> ' . $row['description'] . '</p>';
  echo '<b>State:</b> ' . $row['etat'] . '</p>';
  
  echo '<b>Category:</b> ' . $row['nom_de_categorie'] . '</p>';*/
  echo '<div><span class="pushable"><b>à ' . $row['louevendre'].'</b></span></div>' ;
  echo '<div class="annonceImages" style="height:251px; width:251px; background:#000000"> <img src="data:image/jpeg;base64,' . base64_encode($row['photos']) . '" width="250" height="250" alt="Image">';
  if (isset($row['photo1'])){
      echo '<img src="data:image/jpeg;base64,' . base64_encode($row['photo1']) . '" width="250" height="250" alt="Image">';
  }
  if (isset($row['photo2'])){
      echo'<img src="data:image/jpeg;base64,' . base64_encode($row['photo2']) . '" width="250" height="250" alt="Image">';}
  echo'</div></br>';
  echo '<b> ' . $row['TITRE'] . '</b></br>';
  echo '<b>Prix : <span style="color:green">€'. $row['prix'] . '</span></b> </br>';
  $vendeur=recuperer_utilisateur_par_id($row['vendeurID']);
  $rating=recupererEvaluationParUtilisateurID($row['vendeurID']);
  echo '<b> '.$vendeur["pseudo"]." (".$rating.'⭐)</b> <br>';
  echo '<b>Date Publie:</b> ' . $row['DATE_PUBLICATION'] . '</br>';
  echo "<a href='../controllers/voirDetail.php?id={$row['annonceID']}'>Voir détails</a>";
  echo '</div>';
