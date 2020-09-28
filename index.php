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
  
    
        <main>
            <div class="abstand-header">
                <br>
                <a href="alle" class="button-link hover-bg width_table">all</a>
                <a href="aktelles Jahr" class="button-link hover-bg width_table">Current Year</a>
                <a href="akteller Monat" class="button-link hover-bg width_table">Current Month<a>
                <?php
                    include "income_expenditure_difference.php" ;
                ?>
                <?php
                    include "tables.php";
                 ?>
            </div>
        </main>
    </body>
</html>