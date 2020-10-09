<?php
    include "connection_Mysql.php";   
    $expenditure_id = $_GET['expenditure_id'];
    if ( isset($expenditure_id))
    {
        $sql = "DELETE FROM expenditure
        WHERE id = " .$expenditure_id;
        $result = $db_connection->query($sql);
        print_r ($result);
        $db_connection->close();
        print_r ($sql);
        header("Location: index.php?deleted=1" );
        exit();       
    }
   
?>