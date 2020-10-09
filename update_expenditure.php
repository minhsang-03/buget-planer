<!DOCTYPE html>
<html lang="en">
    <?php
        include "head.php";
    ?>
<body>
        <header>
            <?php
                include "header.php";
            ?>
        </header>
        <br>
    <main>
        <br> <br>
        <?php
        include "connection_Mysql.php";
        $expenditure_id = $_GET["id"];
            if(isset($_GET["id"])){
                $sql_query_expenditure = 
                "SELECT expenditure.id, `amount`, `date`, category.id as category_id FROM `expenditure` 
                JOIN category ON expenditure.category_id = category.id 
                WHERE expenditure.id = " . $expenditure_id ."";
                $result = $db_connection->query($sql_query_expenditure)->fetch_all(MYSQLI_ASSOC)[0];
            }
    
            $sql_query = "SELECT `id`, `name` FROM `category`";
            $result_categories = $db_connection->query($sql_query);
            $categories = [];
            if ($result_categories->num_rows > null) {
            $categories = $result_categories->fetch_all(MYSQLI_ASSOC);
            }
            $db_connection->close();
        ?>
        
<form action="update_save_expenditure.php" method="post" >
    <div class="abstand">
            <div class="float-left">
            <label for="Date">Date: </label>
            <input type="date" value="<?php echo $result["date"]; ?>" name="date" class="input_date" required> 
            <br>
            <label for="amount">Amount: </label>
            <input type="number" min="0.05"  value="<?php echo $result["amount"]; ?>"  minlength="3" class="input_amount" name="amount" required >
            <br>
            <input type="hidden" value="<?php echo $expenditure_id; ?>" name="expenditure_id">
            <label for="category">Category: </label>
            <select  name="category" required class="input_category">
                <?php foreach($categories AS $key => $category){ ?>
                <?php $option_selected = $result['category_id'] == $category['id']; ?>
                <option 
                    value="<?php print_r ($category["id"]) ?>" 
                    <?php if($option_selected) {;?> selected <?php } ?> 
                >
                    <?php print_r ($category["name"]) ?> 
                </option>
                <?php } ?>   
            </select>
        </div>
    </div>
    <div class="text">
            <button class="abstand-button" formaction="delete_expenditure.php?expenditure_id=<?php echo $expenditure_id; ?>">Delete</button>
            <button class="abstand-button" type="submit">Save</Button>
    </div
</form>
    </main>
</body>
</html>
