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
                <div class="navigation">
                    <a href="index.php" class="button-link hover-bg width_table">all</a>
                    <a href="button_current_year.php" class="button-link hover-bg width_table">Current Year</a>
                    <a href="button_current_mounth.php" class="button-link hover-bg width_table">Current Month</a>
                </div>
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
