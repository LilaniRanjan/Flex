<?php
session_start();

// Check if the cart session variable exists
if (isset($_SESSION['CusCart']) && !empty($_SESSION['CusCart'])) {
    // Loop through each item in the cart
    foreach ($_SESSION['CusCart'] as $index => $foodItem) {
        // Display the details of the selected items
        echo "<p>Item $index:</p>";
        echo "<ul>";
        
        // Check if the keys are present before accessing them
        echo "<li>Rice: " . (isset($foodItem['rice']) ? $foodItem['rice'] : 'Not selected') . "</li>";
        
        // Check if 'curry' is an array before using implode
        echo "<li>Curry: " . (isset($foodItem['curry']) && is_array($foodItem['curry']) ? implode(', ', $foodItem['curry']) : 'Not selected') . "</li>";
        
        echo "<li>Spice Level: " . (isset($foodItem['spice']) ? $foodItem['spice'] : 'Not selected') . "</li>";
        echo "<li>Portion Size: " . (isset($foodItem['portion']) ? $foodItem['portion'] : 'Not selected') . "</li>";
        
        // Check if 'extra' is an array before using implode
        echo "<li>Extra Ingredients: " . (isset($foodItem['extra']) && is_array($foodItem['extra']) ? implode(', ', $foodItem['extra']) : 'Not selected') . "</li>";
        
        echo "</ul>";
        
//        header("Location:index.php");
    }
} else {
    echo "<p>Your shopping CusCart is empty.</p>";
}
?>
