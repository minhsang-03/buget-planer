<?php
    include "connection_Mysql.php";
    $sql_query = "SELECT `id`, `amount`, `date` FROM `income`";
    $result = $db_connection->query($sql_query);
    $incomes = [];
    if ($result->num_rows > null) {
       $incomes = $result->fetch_all(MYSQLI_ASSOC);
    // output data of each row
    } else {
    print_r ("0 results");
    }
    //print_r ($categories);
    $db_connection->close();
?>

<?php
    $servername = "localhost";
    $user = "root";
    $dbName = "budget-planer";
    $db_connection = new mysqli($servername, $user, null, $dbName);

    if($db_connection->connect_error) {
    die("ERROR.". $db_connection->connect_error); 
    }

    $sql_query = "SELECT `id`, `amount`, `date` FROM `expenditure`";
    $result = $db_connection->query($sql_query);
    $expenditures = [];
    if ($result->num_rows > null) {
       $expenditures = $result->fetch_all(MYSQLI_ASSOC);
    // output data of each row
    } else {
    print_r ("0 results");
    }
    //print_r ($categories);
    $db_connection->close();
?>
<table class="tabelle">
    <?php include "table_head.php"?>
    <?php
        foreach($incomes as $items) { ?>
    <?php include "table_row.php"?>
        <?php } ?> 
</table>
<p class="titel">Expenditure</p>
<table class="tabelle">
    <?php include "table_head.php"?>
    <?php foreach($expenditures as $items) { ?>
    <?php include "table_row.php"?>
    <?php } ?> 
</table>

        