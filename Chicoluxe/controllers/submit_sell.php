<?php 
if(isset($_POST['submit_category'])){

    setcookie();
    require_once "../controllers/".$category;
}
else{
    require_once "../views/div_form_category_sell.php";
}