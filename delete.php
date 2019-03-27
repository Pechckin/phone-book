<?php
  header("Content-type: text/json; charset=utf-8");
  include "bd.php";

 $del =  mysqli_query($db,"DELETE FROM `phone_book` WHERE `phone` =  '" . $_POST["phone"] . "'");
    if ($del);
    else die('<p>delete error.</p>');

    
 ?>
        

        
