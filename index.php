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
            <div class="fixed-header">
                <a href="index.php"><img src="img/Logo.png" alt="Logo" class="logo"></a>
                <nav class="button-nav">
                    <a href="index.php" class="hover button-nav">Home</a>
                    <a href="expenditure.php" class="hover button-nav">Expenditure</a>
                    <a href="income.php" class="hover button-nav">Income</a>
                </nav>
            </div>
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
                <div>
                    <table class="tabelle">
                            <tr>
                                <th>Date</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>   
                        <div class=tabelle-linie>
                            <tr>
                                <td>ä</td>
                                <td>ä</td> 
                                <td><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                            </tr>
                            <tr>
                                <td>ä</td>
                                <td>ä</td>
                                <td><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                            </tr>
                            <tr>
                                <td>ä</td>
                                <td>ä</td>
                                <td><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                            </tr>
                        </div>
                        </table>
                        <p class="titel">Expenditure</p>
                        <table class="tabelle">
                            <tr2>
                                <th>Date</th>
                                <th>Amount</th> <!--kopfzeile--> 
                                <th>Action</th>
                            </tr>
                            
                            <tr>
                                <td>ä</td>
                                <td>ä</td> <!--attribute--> 
                                <td><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                            </tr>
                            <tr>
                                <td>ä</td>
                                <td>ä</td>
                                <td><a href="update.php"><img src="img/pencile.svg"><a href="income.php"><img src="img/delete.svg"></td>
                        </tr>
                    </table>
                </div>
            </div>
         </main>
</body>
</html>


