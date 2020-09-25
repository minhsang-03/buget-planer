<?php
    $servername = "localhost";
    $user = "root";
    $dbName = "budget-planer";
    $con = new mysqli($servername, $user, null, $dbName);

    if($con->connect_error) {
        die("Error .". $con->connect_error); 
    }
    echo "connected";

    $sql = "SELECT * FROM income";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
     while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " " . $row["amount"]. " " . $row["date"]. "<br>";
    }
    } else {
    echo "result 0";
    }
    $con->close();
?>



<?php
    $servername = "localhost";
    $user = "root";
    $dbName = "budget-planer";
    $con = new mysqli($servername, $user, null, $dbName);

    if($con->connect_error) {
        die("ERROR.". $con->connect_error); 
    }
    echo "connected";

    $sql = "SELECT * FROM income";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
     while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " " . $row["amount"]. " " . $row["date"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $con->close();
?>



<?php
    $servername = "localhost";
    $user = "root";
    $dbName = "budget-planer";
    $con = new mysqli($servername, $user, null, $dbName);

    if($con->connect_error) {
        die("SQL ERROR.". $con->connect_error); 
    }
    echo "connected";

    $sql = "SELECT * FROM expenditure";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
     while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " " . $row["amount"]. " " . $row["date"]. "<br>";
    }
    } else {
    echo "0 results";
    }
    $con->close();
?>