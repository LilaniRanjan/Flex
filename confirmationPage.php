<?php
session_start();

if (isset($_SESSION['CusCartId']) && !empty($_SESSION['CusCartId'])) {
    foreach ($_SESSION['CusCartId'] as $index => $foodItem) {
        echo "<p>Item $index:</p>";
        echo "<ul>";
        
        echo "<li>Rice: " . (isset($foodItem['rice']) ? $foodItem['rice'] : 'Not selected') . "</li>";
        
        echo "<li>Curry: " . (isset($foodItem['curry']) && is_array($foodItem['curry']) ? implode(', ', $foodItem['curry']) : 'Not selected') . "</li>";
        
        echo "<li>Spice Level: " . (isset($foodItem['spice']) ? $foodItem['spice'] : 'Not selected') . "</li>";
        echo "<li>Portion Size: " . (isset($foodItem['portion']) ? $foodItem['portion'] : 'Not selected') . "</li>";
        
        echo "<li>Extra Ingredients: " . (isset($foodItem['extra']) && is_array($foodItem['extra']) ? implode(', ', $foodItem['extra']) : 'Not selected') . "</li>";
        
        echo "</ul>";
        
//        header("Location:index.php");
    }
    
    foreach ($_SESSION['CusCartName'] as $index => $foodItem) {
        echo "<p>Item $index:</p>";
        echo "<ul>";
        
        echo "<li>Rice: " . (isset($foodItem['rice']) ? $foodItem['rice'] : 'Not selected') . "</li>";
        
        echo "<li>Curry: " . (isset($foodItem['curry']) && is_array($foodItem['curry']) ? implode(', ', $foodItem['curry']) : 'Not selected') . "</li>";
        
        echo "<li>Spice Level: " . (isset($foodItem['spice']) ? $foodItem['spice'] : 'Not selected') . "</li>";
        echo "<li>Portion Size: " . (isset($foodItem['portion']) ? $foodItem['portion'] : 'Not selected') . "</li>";
        
        echo "<li>Extra Ingredients: " . (isset($foodItem['extra']) && is_array($foodItem['extra']) ? implode(', ', $foodItem['extra']) : 'Not selected') . "</li>";
        
        echo "</ul>";
        
//        header("Location:index.php");
    }
    
    foreach ($_SESSION['CusCartPrice'] as $index => $foodItem) {
        echo "<p>Item $index:</p>";
        echo "<ul>";
        
        echo "<li>Rice: " . (isset($foodItem['rice']) ? $foodItem['rice'] : 'Not selected') . "</li>";
        
        echo "<li>Curry: " . (isset($foodItem['curry']) && is_array($foodItem['curry']) ? implode(', ', $foodItem['curry']) : 'Not selected') . "</li>";
        
        echo "<li>Spice Level: " . (isset($foodItem['spice']) ? $foodItem['spice'] : 'Not selected') . "</li>";
        echo "<li>Portion Size: " . (isset($foodItem['portion']) ? $foodItem['portion'] : 'Not selected') . "</li>";
        
        echo "<li>Extra Ingredients: " . (isset($foodItem['extra']) && is_array($foodItem['extra']) ? implode(', ', $foodItem['extra']) : 'Not selected') . "</li>";
        
        echo "</ul>";
        
<<<<<<< HEAD
        header("Location:index.php");
=======
<<<<<<< HEAD
        header("Location:index.php");
=======
//        header("Location:index.php");
>>>>>>> 1e5e1cae7e744ae2c21a422c8e72517287557829
>>>>>>> 14b0cae0efb08032d1071e969e23a9c09544a004
    }
} else {
    echo "<p>Your shopping CusCart is empty.</p>";
}
?>
