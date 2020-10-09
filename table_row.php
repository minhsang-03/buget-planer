<tr class=tabelle-linie> 
    <td class="width_table">
        <?php print_r ($item ["date"]) ?>
    </td>
    <td class="width_table">
        <?php print_r ($item ["amount"]) ?>
    </td> 
    <td class="width_table">
        <?php print_r ($item ["name"]) ?>
     </td>
    <td class="width_table">
    <?php 
        if ($item_type == 'income')
        {
            $url = "update_income.php?id=" .$item['id']; 
        }else{
            $url = "update_expenditure.php?id=" .$item['id']; 
        } 
    ?>
        <a href="<?php echo $url ?>">
            <img src="img/pencile.svg">
        </a>
    </td>
</tr>