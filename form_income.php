<?php
    include "connection_Mysql.php";

    $sql_query = "SELECT `id`, `name` FROM `category`";
    $result = $db_connection->query($sql_query);
    $categories = [];
    if ($result->num_rows > null) {
       $categories = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        print_r ("0 results");
    }
    $db_connection->close();
?>


<form action="save_income.php" method="post">
    <div class="abstand">
        <div class="float-left">
            <label for="Date">Date: </label>
            <input type="date" name="date" class="input_date" required> 
            <br>
            <label for="amount">Amount: </label>
            <input type="number" min="0.05" value="0.00"  minlength="3" class="input_amount" name="amount" required >
            <br>
            <label for="category">Category: </label>
            <select  name="category" required class="input_category">
                <?php foreach($categories AS $key => $category){ ?>
                    <option value="<?php print_r ($category["id"]) ?>"> <?php print_r ($category["name"]) ?> 
                    </option>
                <?php } ?>   
            </select>
        </div>
    </div>
    <div class="text">
            <button class="abstand-button"  onClick="window.location.reload();">Clear</button>
            <button class="abstand-button" type="submit">Save</Button>
    </div>
</form>
