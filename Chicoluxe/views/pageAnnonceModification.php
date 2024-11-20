
        <body>
            <h1>Modifier l'annonce</h1>
            <form action="modifierAnnonceAction.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="annonceId" value="<?= $annonceId ?>">
                
                <label for="louevendre">Louer | Vendre:</label>
                <select id="louevendre" name="loueVendre">
                    <option value="vendre" <?= ($annonce['loueVendre'] === 'vendre') ? 'selected' : '' ?>>Vendre</option>
                    <option value="louer" <?= ($annonce['loueVendre'] === 'louer') ? 'selected' : '' ?>>Louer</option>
                    
                </select><br>

                <label for="titre">Titre:</label>
                <input type="text" id="titre" name="titre" value="<?= $annonce['TITRE'] ?>"><br>
                <label for="categorie">Catégorie d'article:</label>
<select id="categorie" name="categorie">
    <option value="electromenager" <?= ($annonce['nom_de_categorie'] === 'electromenager') ? 'selected' : '' ?>>Électroménager</option>
    <option value="immobilier" <?= ($annonce['nom_de_categorie'] === 'immobilier') ? 'selected' : '' ?>>Immobilier</option>
    <option value="vetement" <?= ($annonce['nom_de_categorie'] === 'vetement') ? 'selected' : '' ?>>Vêtement</option>
    <option value="automobile" <?= ($annonce['nom_de_categorie'] === 'automobile') ? 'selected' : '' ?>>automobile</option>
    <option value="telephone" <?= ($annonce['nom_de_categorie'] === 'telephone') ? 'selected' : '' ?>>telephone</option>
    <option value="maison" <?= ($annonce['nom_de_categorie'] === 'maison') ? 'selected' : '' ?>>maison</option>
    <option value="musique" <?= ($annonce['nom_de_categorie'] === 'musique') ? 'selected' : '' ?>>musique</option>
    <option value="collectible" <?= ($annonce['nom_de_categorie'] === 'collectible') ? 'selected' : '' ?>>collectible</option>
</select><br>

                <label for="prix">Prix:</label>
                <input type="number" id="prix" name="prix" step="0.01" value="<?= isset($annonce['prix']) ? $annonce['prix'] : '' ?>" required><br>

               
                

                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="5" cols="40"><?= $annonce['description'] ?></textarea><br>

                <label for="photo">Photo:</label>
                <input type="file" name="photo" accept="image/*"><br>
                
                <input type="submit" value="Modifier l'annonce">
            </form>
        </body>
        </html>