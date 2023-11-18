<?php
session_start();

if (isset($_GET['id'])) {
    $indexToDelete = $_GET['id'];

    unset($_SESSION['CusCartId'][$indexToDelete]);
    unset($_SESSION['CusCartName'][$indexToDelete]);
    unset($_SESSION['CusCartPrice'][$indexToDelete]);

    $_SESSION['CusCartId'] = array_values($_SESSION['CusCartId']);
    $_SESSION['CusCartName'] = array_values($_SESSION['CusCartName']);
    $_SESSION['CusCartPrice'] = array_values($_SESSION['CusCartPrice']);
}

header("Location: cart.php");
exit();
?>
