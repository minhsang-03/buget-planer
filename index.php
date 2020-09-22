<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
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


