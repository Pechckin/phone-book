<?php
    header("Content-type: text/json; charset=utf-8");
    include "bd.php";

    $select =  mysqli_query($db,"SELECT * FROM `phone_book`");

    echo "<table id='phone-book'>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Surname</td>
                    <td>Phone</td>
                    <td>Remove</td>
                </tr>
            </thead>
            <tbody>
            ";

    if (mysqli_num_rows($select) > 0) {
            while($row = mysqli_fetch_assoc($select)) {
                echo "<tr>";
                echo "<td>" . $row["name"] ."</td>";
                echo "<td>" . $row["surname"] ."</td>";
                echo "<td>" . $row["phone"] ."</td>";
                echo "<td><button  onclick=\"rem('" . $row["phone"] . "')\"></button></td>";
                echo "</tr>";
            }
    }

    echo "</tbody>
        </table>";
    if ($select);
    else die('<p>select error.</p>');

    
 ?>
        

 
