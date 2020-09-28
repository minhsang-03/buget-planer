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

    <p class="green">Income: </p>
    <?php
        $sum_income = 0;
        foreach($incomes AS $key => $income) {
            $sum_income = $sum_income +  $income["amount"];
            }
            echo "" . $sum_income . "<br>";
    ?>

    <p class="red">Expenditure: </p>
    <?php
        $sum_expeture = 0;
        foreach($expenditures AS $key => $expenditure) {
                $sum_expeture = $sum_expeture +  $expenditure["amount"];
                }
                echo "" . $sum_expeture . "<br>";
    ?>
    <p class="blau">Difference: </p>
    <?php { ?>
      <span class= double_underline> <?php echo $sum_income - $sum_expeture; ?> </span>
    <?php } ?>
    <br> <br>        