<?php 
    $incomes = array(
        ["amount"=> 5, "date"=> "12.5.2020"], 
        ["amount"=> 10, "date"=> "12.3.2020"], 
        ["amount"=> 25, "date"=> "12.2.2020"],
        ["amount"=> 100, "date"=> "2.12.2020"]);
?>
<?php 
    $expenditures = array(
    ["amount"=> 5, "date"=> "12.5.2020"], 
    ["amount"=> 10, "date"=> "12.3.2020"], 
    ["amount"=> 15, "date"=> "12.2.2020"],
    ["amount"=> 120, "date"=> "2.12.2020"]);
?>
    <p class="green">Income: </p>
    <?php
        $sum_income = 0;
        foreach($incomes AS $key => $income) {
            $sum_income = $sum_income +  $income["amount"];
            }
            echo "" . $sum_income . "<br>";
    ?>

    <p class="red">Expenditure: </p>
    <?php
        $sum_expeture = 0;
        foreach($expenditures AS $key => $expenditure) {
                $sum_expeture = $sum_expeture +  $expenditure["amount"];
                }
                echo "" . $sum_expeture . "<br>";
    ?>
    <p class="blau">Difference: </p>
    <?php
        echo $sum_income - $sum_expeture;
    ?>
            