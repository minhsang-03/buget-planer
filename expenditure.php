<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="test.css">
    <title>expenditure</title>
</head>
<body class="bg-main">
<header class="h60-px" >
        <img src="https://dewey.tailorbrands.com/production/brand_version_mockup_image/710/3747343710_ddb931df-3a0d-4972-94d2-297f36396130.png?cb=1600346120" class="w153 links"  >    
        <nav>
        <a href="index.php" class="button algin hover hover-bg" >Home</a>
        <a href="expenditure.php" class="button hover hover-bg">expenditure</a>
        <a href="income.php" class="button hover hover-bg">income</a>
    </nav> 
 
    </header>
    
    <main>
        <form>
            <label for="Date">Date
            <input type="date"  required>
            </label>
            <br> 
            <label for="amount">anount</label>
            <input type="number" min="0.05" value="0.00"  minlength="3" required >
            <br> 
            <label for="category">category</label>
            <input list="browsers" name="category" required>
            <datalist id="browsers">
                <option value="Haushalt">
                <option value="Verpflegung">
                <option value="Freizeit, Sport & Hobby">
                <option value="Kommunikation & Medien">
                <option value="Verkehr, Auto & Transport">
                <option value="Persönliche Ausgaben">
                <option value="Gesundheit">
                <option value="Sonstige Ausgaben">
                </option>
            </datalist>
            
            <br>
            <button>clear</button>
            <button>create</button>
          </form>
    </main>
</body>
</html>

