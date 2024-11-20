<?php require_once "../views/header.php"?>

<div>
<form action="<?php echo'../controllers/afficherConversation.php?id='.$id ?>" method="post" enctype="multipart/form-data">
<label for="message" style="border-radius 20px;">message:</label></br>
<textarea style="border: 5px; border-radius:20px" id="message" name="message" rows="5" cols="30" placeholder="Entrer message ici..."></textarea>
<input type="file" name="files" id='files' multiple>

<input class="pushable"type=submit value="envoyer" style= width:120px>
</form>
</div>

<?php 
?>

</html>
