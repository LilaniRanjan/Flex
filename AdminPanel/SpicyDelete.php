<?php

require '../classes/SpiceLevel.php';
require '../classes/DbConnector.php';

try{
    $dbConnector = new classes\DbConnector();
    $con = $dbConnector->getConnection();
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){
        $spicy_level_id = $_GET["id"];
        
        if(classes\SpiceLevel::deleteSpicyDetails($con, $spicy_level_id)){
            echo "Portion Size deleted successfully.";
            header("Location: AdminSpicyManage.php");
        } else {
            echo "Fail in delete the Spicy Level";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

