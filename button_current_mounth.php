<?php
include "connection_Mysql.php";
?>
<!DOCTYPE html>
<html lang="en">
    <?php
        include "head.php";
    ?>
    <body>
        <header>
            <?php
                include "header.php";
            ?>
        </header>
  
    
        <main>
            <div class="abstand-header">
                <br>
                <a href="index.php" class="button-link hover-bg width_table">all</a>
                <a href="button_current_year.php" class="button-link hover-bg width_table">Current Year</a>
                <a href="button_current_mounth.php" class="button-link hover-bg width_table">Current Month<a>
                <?php
  

    $sql_query = 
        "SELECT * 
        FROM `income` 
        WHERE 
            YEAR(date) = YEAR(NOW()) 
            AND MONTH(date) = MONTH(NOW())";
    $result = $db_connection->query($sql_query);
    $incomes = [];
    if ($result->num_rows > null) {
       $incomes = $result->fetch_all(MYSQLI_ASSOC);
    // output data of each row
    } else {
    print_r ("0 results");
    }

    $sql_query = 
        "SELECT * 
        FROM `expenditure` 
        WHERE 
            YEAR(date) = YEAR(NOW()) 
            AND MONTH(date) = MONTH(NOW())";
    $result = $db_connection->query($sql_query);
    $expenditures = [];
    if ($result->num_rows > null) {
       $expenditures = $result->fetch_all(MYSQLI_ASSOC);
    // output data of each row
    } else {
    print_r ("0 results");
    }
    $db_connection->close();

    function get_sum (array $entries){
        $sum = 0;
        foreach($entries as $key => $entry) {
            $sum = $sum + $entry['amount'];
        }
        return $sum;
    }
?>
    <p class="green">Income: </p>
    <?php
        $sum_income = get_sum($incomes);
        echo $sum_income . "<br>";
    ?>

    <p class="red">Expenditure: </p>
    <?php
       $sum_expeture = get_sum($expenditures);
       echo $sum_expeture . "<br>";
    ?>
    <p class="blau">Difference: </p>
    <?php { ?>
      <span class= double_underline> <?php echo $sum_income - $sum_expeture; ?> </span>
    <?php } ?>
    <br> <br>        
    <?php
    $servername = "localhost";
    $user = "root";
    $dbName = "budget-planer";
    $db_connection = new mysqli($servername, $user, null, $dbName);

    if($db_connection->connect_error) {
        die("ERROR.". $db_connection->connect_error); 
    }

    $sql_query = 
        "SELECT * 
        FROM `income` 
        WHERE 
            YEAR(date) = YEAR(NOW()) 
            AND MONTH(date) = MONTH(NOW())";
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

$sql_query = 
    "SELECT * 
    FROM `expenditure` 
    WHERE 
        YEAR(date) = YEAR(NOW()) 
        AND MONTH(date) = MONTH(NOW())";
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
        <?php include "table_head.php"?> 
        <?php
            foreach($expenditures as $expenditure) { ?>
                <tr class=tabelle-linie> 
                    <td class="width_table"><?php print_r ($expenditure ["date"]) ?></td>
                    <td class="width_table"><?php print_r ($expenditure ["amount"]) ?></td> 
                    <td class="width_table"><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                </tr>
            <?php } ?> 
        </table>

        
            </div>
        </main>
    </body>
</html>
