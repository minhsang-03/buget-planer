<?php
    include "connection_Mysql.php";

    $sql_query = "SELECT `id`, `name` FROM `category`";
    $result = $db_connection->query($sql_query);
    $categories = [];
    if ($result->num_rows > null) {
       $categories = $result->fetch_all(MYSQLI_ASSOC);
    // output data of each row
    } else {
        print_r ("0 results");
    }
    //print_r ($categories);
    $db_connection->close();
?>


<form action="form.php" method="post">
    <div class="abstand">
        <div class="float-left">
            <label for="Date">Date: </label>
            <input type="date" name="date" class="input_date" required> 
            <br>
            <label for="amount">Amount: </label>
            <input type="number" min="0.05" value="0.00"  minlength="3" class="input_amount" name="amount" required >
            <br>
            <label for="category">Category: </label>
            <select name="select" required class="input_category">
                <?php foreach($categories AS $key => $category){ ?>
                    <option> <?php print_r ($category["name"]) ?> 
                    </option>
                <?php } ?>   
            </select>
        </div>
    </div>
    <div class="text">
            <button class="abstand-button"  onClick="window.location.reload();">Clear</button>
            <input class="abstand-button" type="submit" name="Submit" value="Submit">
    </div>
</form>
<?php
    $sql = "INSERT INTO income (id, amount, date) Values (11, 12.40, '2020.08.10');";


    /*if($db -> multi_query($sql) === true {}*/
    if(isset($_POST["amount"])) {
        echo "Verbindung ist da";
    }else{
        echo "Verbindungsfehrler error";
    }

    

?>