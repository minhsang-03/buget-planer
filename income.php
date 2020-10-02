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
    <main class="abstand-header">
        <?php
            include "form_income.php";
            if ( isset($_GET['success']) && $_GET['success'] == 1 )
    {
            echo "eintrag erfolgreich eingetragen";
    }
        ?>
    </main>
</body>
</html>
