<?php
  header("Content-type: text/json; charset=utf-8");
  include "bd.php";

    $insert =  mysqli_query($db,"INSERT INTO `phone_book`(`surname`, `name`, `phone`) VALUES (".
                            "'" . $_POST["surname"] . "'," .
                            "'" . $_POST["name"] . "'," . 
                            "'" . $_POST["phone"] . "')");
    if ($insert);
    else die('<p>insert error.</p>');

    
 ?>
        
