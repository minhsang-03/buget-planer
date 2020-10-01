<tr class=tabelle-linie> 
    <td class="width_table">
        <?php print_r ($items ["date"]) ?>
    </td>
    <td class="width_table">
        <?php print_r ($items ["amount"]) ?>
    </td> 
    <td class="width_table">
        <a href="update.php?id=<?php echo $items["id"] ?>">
            <img src="img/pencile.svg">
        </a>
        <a href="income.php">
            <img src="img/delete.svg">
        </a>
    </td>
</tr>