<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if (isset($_POST['dropdown_food']) && isset($_POST['dropdown_drink'])) {
            $selectedFood = $_POST['dropdown_food'];
            $selectedDrink = $_POST['dropdown_drink'];

        // Retrieve quantities
        $foodQuantity = $_POST['qtyfood'];
        $drinkQuantity = $_POST['qtydrink'];

        // Process the order
        echo "Food: $selectedFood Quantity: $foodQuantity<br>";
        echo "Drink: $selectedDrink Quantity: $drinkQuantity<br>";

        }else{
            echo "You have not made any orders yet.";
        }
    }else{
        echo "Entry unsuccessful.";
    }
?>