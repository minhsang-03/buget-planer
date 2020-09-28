<?php
    $servername = "localhost";
    $user = "root";
    $dbName = "budget-planer";
    $db_connection = new mysqli($servername, $user, null, $dbName);

    if($db_connection->connect_error) {
        die("ERROR.". $db_connection->connect_error); 
    }

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

<form>
    <div class="abstand">
        <div class="float-left">
            <label for="Date">Date: </label>
            <input type="date" class="input_date" required> 
            <br>
            <label for="amount">Amount: </label>
            <input type="number" min="0.05" value="0.00"  minlength="3" class="input_amount" required >
            <br>
            <label for="category">Category: </label>
            <select name="choice" required class="input_category">
                <?php foreach($categories AS $key => $category){ ?>
                    <option> <?php print_r ($category["name"]) ?> 
                    </option>
                <?php } ?>   
            </select>
        </div>
    </div>
    <div class="text">
        <button class="abstand-button">Clear</button>
        <button class="abstand-button">Submit</button>
    </div>
</form>