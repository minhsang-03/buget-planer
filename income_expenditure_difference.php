<?php
    include "connection_Mysql.php";

    if ( isset($_GET['filter']) && $_GET['filter'] == "current_year" )
    {
        $sql_query_expenditure = "SELECT `id`, `amount`, `date` FROM `expenditure` WHERE YEAR(date) = YEAR(NOW())";
        $sql_query_income = "SELECT `id`, `amount`, `date` FROM `income` WHERE YEAR(date) = YEAR(NOW())";
    } else if ( isset($_GET['filter']) && $_GET['filter'] == "current_month" )
    {
        $sql_query_expenditure = "SELECT `id`, `amount`, `date` FROM `expenditure` WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date) = MONTH(NOW())";
        $sql_query_income = "SELECT `id`, `amount`, `date` FROM `income` WHERE YEAR(date) = YEAR(NOW()) AND MONTH(date) = MONTH(NOW())";
    } else {
        $sql_query_expenditure = "SELECT `id`, `amount`, `date` FROM `expenditure`";
        $sql_query_income = "SELECT `id`, `amount`, `date` FROM `income`";
    }
   


    $result = $db_connection->query($sql_query_income);
    $incomes = [];
    if ($result->num_rows > null) {
       $incomes = $result->fetch_all(MYSQLI_ASSOC);
    // output data of each row
    } else {
        print_r ("0 results");
    }
    

    $result = $db_connection->query($sql_query_expenditure);
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