<html>
<form action="<?php echo'../controllers/envoiMessage.php?id='.$id ?>" method="post" enctype="multipart/form-data">
<label for="message">message:</label></br>
<textarea id="message" name="message" rows="10" cols="30" placeholder="Entrer message ici..."></textarea>
<input type="file" name="files" id='files' multiple>
<input type=submit value="envoyer">
</form>
</html>


