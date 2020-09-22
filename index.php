<!DOCTYPE html>
<html lang="en">
    <?php
        include "head.php";
    ?>
    <body>
        <header>
            <?php
                include "header.php"
            ?>
        </header>
  
    
        <main>
            <div class="abstand-header">
                <br>
                <a href="aktelles Jahr" class="button-link hover-bg">Current Year</a>
                <a href="akteller Monat" class="button-link hover-bg">Current Month</a>
                <p class="green">Income</p>
                <p class="red">Expenditure</p>
                <p class="blau">Difference</p>
                <p class="titel">Income</p>
                <?php
                    include "tables.php";
                 ?>
            </div>
        </main>
    </body>
</html>


