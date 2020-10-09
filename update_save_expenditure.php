<?php
    include "connection_Mysql.php";
    if(isset($_POST["amount"])) {
        $date = $_POST["date"];
        $amount = $_POST["amount"];
        $category_id= $_POST["category"];
        $expenditure_id = $_POST["expenditure_id"];

        $sql_query = 
            "UPDATE 
            expenditure
            SET 
            amount =".$amount.", 
            date = '".$date."', 
            category_id = ".$category_id.
            " WHERE id =". $expenditure_id;

        $result = $db_connection->query($sql_query);
        $db_connection->close();
        header("Location: index.php?updated=1" );
        exit();
    }
?>