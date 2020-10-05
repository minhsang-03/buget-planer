<?php
    include "connection_Mysql.php";

    if(isset($_POST["amount"])) {
        $date = $_POST["date"];
        $amount = $_POST["amount"];
        $category_id= $_POST["category"];
    }
        
        $sql_query = 
            "INSERT INTO income (amount, date, category_id)
            VALUES ('".$amount."','".$date."',".$category_id.")";
        $result = $db_connection->query($sql_query);
        print_r ($result);
        $db_connection->close();
        print_r ($sql_query);
        header("Location: income.php?success=1" );
        exit();  
?>