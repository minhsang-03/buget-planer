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
    <br>
    <main class="abstand-header">
        <form>
            <div class="abstand">
                <label for="Date">Date 
                <input type="date" required>
                </label>
                <label for="amount">Amount
                <input type="number" min="0.05" value="0.00"  minlength="3" required >
                </label>
                <label for="category">Category
                <input list="browsers" name="category" required>
                </label>
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
            </div>
            <div class="abstand-button">
                <button>Clear</button>
                <button>Submit</button>
        </form>
          </div>
    </main>
</body>
</html>

