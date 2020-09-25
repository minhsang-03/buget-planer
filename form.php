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
            </div>
        </form>