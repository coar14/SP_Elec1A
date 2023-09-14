<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masong_Ordering</title>
    <style>  
        .container{
            align-content: center;
        }

    </style>
</head>
<body>
    <div class="container">
    <form class="forms" method="POST" action="formhandler.php">
        <label for="food">Food </label>
        <select name="dropdown_food" class="food">
            <option> - </option>
            <option value="Egg">Egg</option>
            <option value="La Carte">La Carte</option>
            <option value="Springrolls">Springrolls</option>
            <option value="Takoyaki">Takoyaki</option>
            <option value="PorkChop">Porkchop</option>
        </select>
        <label for="qtyfood">Quantity </label>
        <input type="number" class="qtyfood" name="qtyfood" min="1" placeholder="min. 1">
        <br>
        <label for="food">Drinks </label>
        <select name="dropdown_drink" class="food">
            <option> - </option>
            <option value="Cappuccino">Cappuccino</option>
            <option value="Choco Drink">Choco Drink</option>
            <option value="Water">Water</option>
            <option value="Espresso">Espresso</option>
            <option value="Fresh Milk">Fresh Milk</option>
        </select>
        <label for="qtyDrinks">Quantity </label>
        <input type="number" class="qtyDrinks" name="qtydrink" min="1" placeholder="min. 1">
        <br><br>
        <input type="submit" value="Submit">
    </form>
    </div>
   </body>
</html>