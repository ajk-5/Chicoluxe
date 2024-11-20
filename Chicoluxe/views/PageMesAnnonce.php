<?php
echo "<div class='annonces' width='300 px' height='300 px'>";
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['photos']) . '" width="250" height="250" alt="Image"> </br>';
            echo '<strong> ' . $row['TITRE'] . '</strong>';
            echo '<strong>Prix : <span style="color:green">€' . $row['prix'] . '</span></strong> </br>';
            $vendeur = recuperer_utilisateur_par_id($row['vendeurID']);
            echo '<strong> ' . $vendeur["pseudo"] . '</strong> <br>';
            echo '<strong>Date Publie:</strong> ' . $row['DATE_PUBLICATION'] . '</br>';

            // Bouton "Modifier" - Redirige vers une page de modification avec l'ID de l'annonce
            echo "<a href='../controllers/ModifierAnnonce.php?id={$row['annonceID']}'>Modifier</a>";

            // Formulaire pour le bouton "Supprimer" - Envoie l'ID de l'annonce à supprimer
            echo "<form method='POST' action='../controllers/supprimerAnnonce.php'>";
            echo "<input type='hidden' name='annonceID' value='" . $row['annonceID'] . "'>";
            echo "<input type='submit' value='Supprimer'>";
            echo "</form>";

            echo '</div>';