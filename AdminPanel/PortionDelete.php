<?php

require '../classes/PortionSize.php';
require '../classes/DbConnector.php';

try{
    $dbConnector = new classes\DbConnector();
    $con = $dbConnector->getConnection();
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){
        $portion_size_Id = $_GET["id"];
        
        if(\classes\PortionSize::deletePortionDetails($con, $portion_size_Id)){
            echo "Portion Size deleted successfully.";
            header("Location: AdminPortionManage.php");
        } else {
            echo "Fail in delete the Portion Size";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

