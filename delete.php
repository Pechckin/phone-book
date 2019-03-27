<?php
  header("Content-type: text/json; charset=utf-8");
  include "bd.php";

    //$del =  mysqli_query($db,"DELETE FROM `phone_book` WHERE 'phone' =  '" . $_POST["phone"] . "')");
 $del =  mysqli_query($db,"DELETE FROM `phone_book` WHERE 'phone' = 4" ));
 //$del =  mysqli_query($db,"INSERT INTO `phone_book`(`surname`, `name`, `phone`) VALUES (".
//                            "'" . $_POST["surname"] . "'," .
//                            "'" . $_POST["name"] . "'," . 
//                            "'" . $_POST["phone"] . "')");
    //die( "DELETE FROM `phone_book` WHERE `phone` = '" . $_POST["phone"] . "')");
    if ($del);
    else die('<p>delete error.</p>');

    
 ?>
        
