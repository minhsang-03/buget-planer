<?php
    $servername = "localhost";
    $user = "root";
    $dbName = "budget-planer";
    $db_connection = new mysqli($servername, $user, null, $dbName);

    if($db_connection->connect_error) {
        die("ERROR.". $db_connection->connect_error); 
    }
    echo "connected";

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
        <label for="Date">Date 
        <input type="date" required>
        </label>
        <label for="amount">Amount
        <input type="number" min="0.05" value="0.00"  minlength="3" required >
        </label>
        <label for="category">Category
        
        <select name="choice" required>
            <?php foreach($categories AS $key => $category){ ?>
                <option> <?php print_r ($category["name"]) ?> 
                </option>
            <?php } ?>   
        </select>
    </div>
    <div class="abstand-button">
        <button>Clear</button>
        <button>Submit</button>
    </div>
</form>
