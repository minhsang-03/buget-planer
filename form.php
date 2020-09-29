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


<form action="" method="post">
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
        <button class="abstand-button">Clear</button>
        <input class="abstand-button" type="submit" name="Submit" value="Submit">
    </div>
</form>
<?php
/*
    if(isset($_POST["submit"]));
    $date = $_POST("date")
    $amount = $_POST("amount")
    $category = $_POST("category")

    $submit = $db->prepare("insert into income (date, amount, category) Values(?,?,?())");
    $submit -> bind_param("ssi, date, amount, category");
    $submit -> execute();
    endif;
    */
?>