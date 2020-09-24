<!DOCTYPE html>
<html lang="en">
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
                <a href="akteller Monat" class="button-link hover-bg">Current Month<a>
                <br>
            
            <?php 
                $expenditures = array(
                    ["amount"=> 5, "date"=> "12.5.2020"], 
                    ["amount"=> 10, "date"=> "12.3.2020"], 
                    ["amount"=> 15, "date"=> "12.2.2020"],
                    ["amount"=> 100, "date"=> "2.12.2020"]);
            ?>
                <?php
    
    $expenditures = array(
        ["amount"=> 5, "date"=> "12.5.2020"], 
        ["amount"=> 10, "date"=> "12.3.2020"], 
        ["amount"=> 15, "date"=> "12.2.2020"],
        ["amount"=> 100, "date"=> "2.12.2020"]);

        $sum = 0;
        foreach($expenditures AS $key => $expenditure) {
           $sum = $sum +  $expenditure["amount"];
        }
        echo "Resultat:" . $sum . "<br>";
        ?>

        
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


echo $expenditures ["eins"] + $expenditures ["amount"];