
<form action=<?php echo '"evaluer.php?id='.$id.'"'?> method="post" enctype="multipart/form-data" >

<label for="etoiles">Combien d’étoiles voulez-vous donner:</label><br>

                    
  <label>  
  ⭐️
    <input type="radio" name="etioles" value=1 >

  </label></br>
  <label>
  ⭐️⭐️
    <input type="radio" name="etioles" value=2 >
     
  </label></br>
  <label>
  ⭐️⭐️⭐️
    <input type="radio" name="etioles" value=3 >
    
  </label></br>
  <label>
  ⭐️⭐️⭐️⭐️
    <input type="radio" name="etioles" value=4 >
    
  </label></br>
  <label>
  ⭐️⭐️⭐️⭐️⭐️
    <input type="radio" name="etioles" value=5 checked>
    
  </label></br>
  <label for="commentaire">commentaire:</label></br>
                <textarea id="commentaire" name="commentaire" rows="10" cols="50" placeholder="Entrer la commentaire ici...">
                </textarea><br>

<input type="submit">
  

                   
