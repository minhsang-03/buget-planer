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
  include "connection_Mysql.php";
  $sql_query = "SELECT income.id, `amount`, `date`, category.name FROM `income` JOIN category ON income.category_id = category.id";
  $result = $db_connection->query($sql_query);
  $incomes = [];
  if ($result->num_rows > null) {
     $incomes = $result->fetch_all(MYSQLI_ASSOC);
  // output data of each row
  } else {
  print_r ("0 results");
  }
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

  $sql_query = "SELECT expenditure.id, `amount`, `date`, category.name FROM `expenditure` JOIN category ON expenditure.category_id = category.id";
  $result = $db_connection->query($sql_query);
  $expenditures = [];
  if ($result->num_rows > null) {
     $expenditures = $result->fetch_all(MYSQLI_ASSOC);
  // output data of each row
  } else {
  print_r ("0 results");
  }
  $db_connection->close();
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

    $sql_query = "SELECT `id`, `amount`, `date` FROM `income` WHERE YEAR(date) = 2020";
    $result = $db_connection->query($sql_query);
    $incomes = [];
    if ($result->num_rows > null) {
       $incomes = $result->fetch_all(MYSQLI_ASSOC);
    // output data of each row
    } else {
    print_r ("0 results");
    }
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

$sql_query = "SELECT `id`, `amount`, `date` FROM `expenditure` WHERE YEAR(date) = 2020";
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
                <tr class=tabelle-linie> 
    <td class="width_table">
        <?php print_r ($items ["date"]) ?>
    </td>
    <td class="width_table">
        <?php print_r ($items ["amount"]) ?>
    </td> 
    <td class="width_table">
        <?php print_r ($items ["name"]) ?>
     </td>
    <td class="width_table">
        <a href="update.php?id=<?php echo $items["id"] ?>">
            <img src="img/pencile.svg">
        </a>
        <a href="income.php">
            <img src="img/delete.svg">
        </a>
    </td>
</tr>
            <?php } ?> 
</table>
        <p class="titel">Expenditure</p>
        <table class="tabelle">
        <?php include "table_head.php"?> 
        <?php
            foreach($expenditures as $items) { ?>
                <tr class=tabelle-linie> 
    <td class="width_table">
        <?php print_r ($items ["date"]) ?>
    </td>
    <td class="width_table">
        <?php print_r ($items ["amount"]) ?>
    </td> 
    <td class="width_table">
        <?php print_r ($items ["name"]) ?>
     </td>
    <td class="width_table">
        <a href="update.php?id=<?php echo $items["id"] ?>">
            <img src="img/pencile.svg">
        </a>
        <a href="income.php">
            <img src="img/delete.svg">
        </a>
    </td>
</tr>
            <?php } ?> 
        </table>
            </div>
        </main>
    </body>
</html>


