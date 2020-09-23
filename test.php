<?php 
    $incomes = array(
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
?>

<table class="tabelle">
    <tr>
        <th>Date</th>
        <th>Amount</th>
        <th>Action</th>
    </tr>   

        <?php
            foreach($incomes as $income) { ?>
                <tr class=tabelle-linie> 
                    <td><?php print_r ($income ["date"]) ?></td>
                    <td><?php print_r ($income ["amount"]) ?></td> 
                    <td><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                </tr>
            <?php } ?> 
</table>
        <p class="titel">Expenditure</p>
        <table class="tabelle">
            <tr>
                <th>Date</th>
                <th>Amount</th> <!--kopfzeile--> 
                <th>Action</th>
            </tr>     
        <?php
            foreach($expenditures as $expenditure) { ?>
                <tr class=tabelle-linie> 
                    <td><?php print_r ($expenditure ["date"]) ?></td>
                    <td><?php print_r ($expenditure ["amount"]) ?></td> 
                    <td><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                </tr>
            <?php } ?> 
        </table>


