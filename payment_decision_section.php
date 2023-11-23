<?php
session_start();
require_once './classes/DbConnector.php';

$dbcon = new \classes\DbConnector();
$con = $dbcon->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['payment_option'])){
        $selected_payment_option = $_POST['payment_option'];
        
        if($selected_payment_option == "COD"){
            header("Location: index.php");
        }elseif ($selected_payment_option == "Online") {
            header("Location: payment_index.php");
        } else {
            header("Location: foodCusPage.php");
        }
    }
}