<?php
    $servername = "localhost";
    $user = "root";
    $dbName = "budget-planer";
    $db_connection = new mysqli($servername, $user, null, $dbName);

    if($db_connection->connect_error) {
        die("ERROR.". $db_connection->connect_error); 
    }

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
    <tr>
        <th>Date</th>
        <th>Amount</th>
        <th>Action</th>
    </tr>   

        <?php
            foreach($incomes as $income) { ?>
                <tr class=tabelle-linie> 
                    <div>
                        <td class="width_table"><?php print_r ($income ["date"]) ?></td>
                        <td class="width_table"><?php print_r ($income ["amount"]) ?></td> 
                        <td class="width_table"><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                    </div>
                </tr>
            <?php } ?> 
</table>
        <p class="titel">Expenditure</p>
        <table class="tabelle">
            <tr>
                <th>Date</th>
                <th>Amount</th> <!--kopfzeile--> 
                <th>Action</th>
            </tr>     
        <?php
            foreach($expenditures as $expenditure) { ?>
                <tr class=tabelle-linie> 
                    <td class="width_table"><?php print_r ($expenditure ["date"]) ?></td>
                    <td class="width_table"><?php print_r ($expenditure ["amount"]) ?></td> 
                    <td class="width_table"><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                </tr>
            <?php } ?> 
        </table>

        