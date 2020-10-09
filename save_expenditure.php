<?php
    include "connection_Mysql.php";

    if(isset($_POST["amount"])) {
        $date = $_POST["date"];
        $amount = $_POST["amount"];
        $category_id= $_POST["category"];
        }
        
        $sql_query = 
            "INSERT INTO expenditure (amount, date, category_id)
            VALUES ('".$amount."','".$date."',".$category_id.")";
        $result = $db_connection->query($sql_query);
        $db_connection->close();
        header("Location: expenditure.php?success=1" );
        exit();
?>