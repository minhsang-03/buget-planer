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

    $sql_query = "SELECT `id`, `amount`, `date` FROM `expenditure`";
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