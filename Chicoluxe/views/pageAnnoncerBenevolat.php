
<div id="annonce"><h2>PROPOSER | DEMANDER UN BENEVOLAT</h2>
            <form action="creerAnnonce.php" method="post" enctype="multipart/form-data">

                <label for="LoueVendre">Louer | Vendre:</label>
                <select id="louevendre" name="loueVendre">
                    <option value="benevolat">BENEVOLAT<selected></option>
                </select><br>

                <label for="titre">titre:</label>
                <input type="text" id="titre" name="titre"><br>

                <label for="categorie">categorie d'article</label>
                <select id="categorie" name="categorie">
                    <option value="electromenager">DEMANDE UN BENEVOLAT </option>
                    <option value="immobilier">PROPOSE UN BENEVOLAT</option>

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



                <label for="prix">ARGENT SI PROPOSER(SINON METTEZ 0):</label>
                <input type="number" id="prix" name="prix" step="0.01" ></br>

                <label for="photo">Photo (PAS OBLIGATOIRE):</label>
                <input type="file" name="photo" id="photo" accept="image/*">
                <input type="file" name="photo1" id="photo1" accept="image/*" >
                <input type="file" name="photo2" id="photo2" accept="image/*">
                <br>
                
                <label for="etat">etat:</label>
                <select  id="categorie" name="etat"><br>
                    <option value="URGENCE">URGENCE</option>
                    <option value="VITE POSSIBLE">VITE POSSIBLE</option>
                    <option value="PAS D'URGENCE">PAS D'URGENCE</option>
                    <option value="COMME VOUS VOULEZ">COMME VOUS VOULEZ</option>

                </select></br>

                <label for="description">description:</label></br>
                <textarea id="description" name="description" rows="10" cols="50" placeholder="Entrer la description ici...">
                </textarea><br>
                <input type="submit" name='submit' value="PUBLIER BENEVOLAT">
            </form>


    </body>
</html>