<?php
include 

if(isset($_POST["amount"])) {
    $date = $_POST["date"];
    $amount = $_POST["amount"];
    $category = $_POST["category"];
    
    echo $category;
    echo $date;
    echo $amount;die;

};
?>