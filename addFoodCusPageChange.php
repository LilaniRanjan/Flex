<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $selectedRice = $_POST['rice'];
    $selectedCurry = isset($_POST['curry']) ? $_POST['curry'] : [];
    $selectedSpice = $_POST['spice'];
    $selectedPortion = $_POST['portion'];
    $selectedExtra = isset($_POST['extra']) ? $_POST['extra'] : [];

    // Create an array to store the selected items
    $foodItem = [
        'rice' => $selectedRice,
        'curry' => $selectedCurry,
        'spice' => $selectedSpice,
        'portion' => $selectedPortion,
        'extra' => $selectedExtra,
    ];

    // Check if the shopping cart session variable exists
    if (!isset($_SESSION['CusCart'])) {
        // If not, create it and initialize as an empty array
        $_SESSION['cart'] = [];
    }

    // Add the selected items to the shopping cart session
    $_SESSION['CusCart'][] = $foodItem;

    // Redirect to a confirmation page or back to the customization page
    header("Location: confirmationPage.php");
    exit();
}
?>
