<style>
  .rechercheAnnonce{
    display:flex;
    flex-direction:row;
    padding: 10px;
  }
  .titrePseudoPrix{
    display:flex;
    flex-direction:column;
    padding: 10px;
  }
  .annonceImage{
    padding:15px;
  }
  #searchBar{
    display:flex;
    flex-direction:row;
    padding: 10px;
  }
  .form{
    display:flex;
    flex-direction:row;

  }
</style>
<div id="searchBar" style= "text-fill-color:#00008B color: #00008B;">
  <form action="rechercheAnnonce.php" method="post">
    <label for="mot">Recherche: </label>
      <div><input type="text" style="text-decoration:none"  id="mot" name="mot"><div>
      <div> <label for="categorie">categorie d'article</label>
                    <select id="categorie" name="categorie">
                        <option value=""></option>
                        <option value="electromenager">ELECTROMENAGER </option>
                        <option value="immobilier">IMMOBILIER</option>
                        <option value="vetement">VETEMENT</option>
                        <option value="Telephones">TELEPHONE </option>
                        <option value="musique">MUSIQUE</option>
                        <option value="maison">MAISON</option>
                    </select>
      </div>
      <div>
                    <label for="region">region:</label>
                    <select id="region" name="region">
                        <option value=""></option>
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
      </div>
      <div>
   <label for="group">sort :</label>
    <select id="group" name="group">
      <option value="prix">prix </option>
      <option value="DATE_PUBLICATION">anciennite</option>
    </select>
    <label for="order">ordre:</label>
    <select id="order" name="order">
      <option value="asc">croissant</option>
      <option value="desc">decroissant</option>
    </select>
    <input type='submit' value='recherche'>
  </form>
</div>