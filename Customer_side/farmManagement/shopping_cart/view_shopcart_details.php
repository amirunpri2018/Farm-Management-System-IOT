<?php
// Create connection
/* fetch associative array */

$mysqli = new mysqli("localhost", "root", '', "fmsmy");
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$query = "SELECT * FROM regshoporder INNER JOIN items ON regshoporder.Item_Code=items.Code";
/* fetch associative array */

if ($result = $mysqli->query($query)) {

    while ($row = $result->fetch_array()) {
        //echo $row['name'];
        echo "<div class='well'>";

        echo "<ul class='list-unstyled'>";

        echo " <tr>
                   <td>{$row['OrderNumber']}</td>
                   <td>{$row['Name']}</td>
                   <td>{$row['Date']}</td>
                   <td>{$row['Code']}</td>
                   </tr>\n";

        echo("</div>");
    }
    "</ul>";
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>