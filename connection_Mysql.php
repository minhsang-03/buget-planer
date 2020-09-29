<?php
    $servername = "localhost";
        $user = "root";
        $dbName = "budget-planer";
        $db_connection = new mysqli($servername, $user, null, $dbName);

        if($db_connection->connect_error) {
            die("ERROR.". $db_connection->connect_error); 
        }
?>
