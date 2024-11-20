<?php require_once "../views/header.php";
if (isset($_COOKIE["userID"]) == true) {
    $utilisateur= recuperer_utilisateur_par_id($_COOKIE["userID"]);
    echo "</br> <strong>BONJOUR ".$utilisateur["pseudo"]."</strong>"; }
    else{
        echo 'vous etes pas connected: </br> <b>Veuillez creer un compte :<b>
       <a href="../controllers/signUpRegister.php"> veuillez connectee></a>' ;
    }?>


            <div id="annonce"><h2>PUBLISH AN ANNOUNCEMENT</h2>
            <form action="creerAnnonce.php" method="post" enctype="multipart/form-data">

                <label for="LoueVendre">SELL | RENT:</label>
                <select id="louevendre" name="loueVendre">
                    <option value="SELL">SELL</option>
                    <option value="RENT">RENT</option>
                    
                </select><br>

                <label for="titre">TITLE</label>
                <input type="text" id="titre" name="titre"><br>

                <label for="categorie">CATEGORY</label>
                <select id="categorie" name="categorie">
                    <option value="PRIVATE_JET">PRIVATE JET</option>
                    <option value="REAL_ESTATE">REAL ESTATE</option>
                    <option value="vetement">  </option>
                    <option value="Telephone">TELEPHONE </option>
                    <option value="musique">MUSIQUE</option>
                    <option value="maison">MAISON</option>
                    <option value="automobile">AUTOMOBILE</option>
                    <option value="media">MEDIA</option>
                    <option value="collectible">COLLECTIBLES</option>


                </select></br>
                <label for="region">Choisir region:</label>
                    <select id="region" name="region">
                        <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                        <option value="Bourgogne-Franche-Comte">Bourgogne-Franche-Comté</option>
                        <option value="Brittany">Brittany</option>
                        <option value="Centre-Val de Loire">Centre-Val de Loire</option>
                        <option value="Corsica">Corsica</option>
                        <option value="Grand Est">Grand Est</option>
                        <option value="Hauts-de-France">Hauts-de-France</option>
                        <option value="Ile-de-France">Île-de-France</option>
                        <option value="Normandy">Normandy</option>
                        <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                        <option value="Occitanie">Occitanie</option>
                        <option value="Pays de la Loire">Pays de la Loire</option>
                        <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
                    </select>



                <label for="prix">Prix:</label>
                <input type="number" id="prix" name="prix" step="0.01"  required></br>

                <label for="photo">Photo:</label>
                <input type="file" name="photo" id="photo" accept="image/*" required>
                <input type="file" name="photo1" id="photo1" accept="image/*" >
                <input type="file" name="photo2" id="photo2" accept="image/*">
                <br>
                
                <label for="etat">etat:</label>
                <select  id="categorie" name="etat"><br>
                    <option value="neuf">Neuf</option>
                    <option value="tresBon">presque neuf etat</option>
                    <option value="Bon">utilisable</option>
                    <option value="satisfiant">satisfiant</option>

                </select></br>

                <label for="description">description:</label></br>
                <textarea id="description" name="description" rows="10" cols="50" placeholder="Entrer la description ici...">
                </textarea><br>
                <input type="submit" value="Publier l'annonce">
            </form>


    </body>
</html>
