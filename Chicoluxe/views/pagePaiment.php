<div><form action="<?php echo'../controllers/acheterArticle.php?id='.$conversationID ?>" method="post" enctype="multipart/form-data">
<select id="paiment" name="methodeDePaiment">
                    <option value="ESPECES">a la main </option>
                    <option value="carte bancaire">carte bancaire</option>
                    <option value="paypal">paypal</option>
                </select></br>
<input type=submit value="Acheter">
</form></div>