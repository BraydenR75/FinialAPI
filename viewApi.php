<?php
    $displayall = "SELECT * FROM users"; //should grab all the users info
    $result = $db->query($displayall); //should display all of it
    
    
    
    
    //Found in stack overflow idk if it will help, but ill check back with it later

    //$sql = "SELECT * FROM users";
    //$result = mysqli_query($db, $sql); // First parameter is just return of "mysqli_connect()" function
    //echo "<br>";
    //echo "<table border='1'>";
    //while ($row = mysqli_fetch_assoc($result)) { // Important line, returns assoc array
    //    echo "<tr>";
    //    foreach ($row as $field => $value) { 
    //        echo "<td>" . htmlspecialchars($value) . "</td>"; 
    //    }
    //    echo "</tr>";
    //}
    //echo "</table>";
?>