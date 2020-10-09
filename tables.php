<?php
    include "connection_Mysql.php";
    if ( isset($_GET['filter']) && $_GET['filter'] == "current_year" )
    {
        $sql_query_income = "SELECT income.id, `amount`, `date`, category.name FROM `income` JOIN category ON income.category_id = category.id  WHERE YEAR(date) = YEAR(NOW())";
        $sql_query_expenditure = "SELECT expenditure.id, `amount`, `date`, category.name FROM `expenditure` JOIN category ON expenditure.category_id = category.id  WHERE YEAR(date) = YEAR(NOW())";
    } else if ( isset($_GET['filter']) && $_GET['filter'] == "current_month" )
    {
        $sql_query_income = "SELECT income.id, `amount`, `date`, category.name FROM `income` JOIN category ON income.category_id = category.id  WHERE YEAR(date) = YEAR(NOW())  AND MONTH(date) = MONTH(NOW())";
        $sql_query_expenditure = "SELECT expenditure.id, `amount`, `date`, category.name FROM `expenditure` JOIN category ON expenditure.category_id = category.id  WHERE YEAR(date) = YEAR(NOW())  AND MONTH(date) = MONTH(NOW())";
    } else {
        $sql_query_income = "SELECT income.id, `amount`, `date`, category.name FROM `income` JOIN category ON income.category_id = category.id" ;
        $sql_query_expenditure = "SELECT expenditure.id, `amount`, `date`, category.name FROM `expenditure` JOIN category ON expenditure.category_id = category.id" ;
    }

    $result = $db_connection->query($sql_query_income);
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
    include "connection_Mysql.php";

    $result = $db_connection->query($sql_query_expenditure);
    $expenditures = [];
    if ($result->num_rows > null) {
       $expenditures = $result->fetch_all(MYSQLI_ASSOC);
    // output data of each row
    } else {
    print_r ("0 results");
    }
    $db_connection->close();
?>
<p class="titel">income</p>
<table class="tabelle">
    <?php 
        include "table_head.php";
        $item_type = "income";
        foreach($incomes as $item) { 
            include "table_row.php";
        }
    ?> 
</table>
<p class="titel">expenditure</p>
<table class="tabelle">
    <?php 
        include "table_head.php";
        $item_type = "expenditure";
        foreach($expenditures as $item) { 
            include "table_row.php";
        }
    ?> 
</table>

        