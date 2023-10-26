<?php

require '../classes/Poll.php';
require '../classes/DbConnector.php';

try{
    $dbConnector = new classes\DbConnector();
    $con = $dbConnector->getConnection();
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){
        $poll_food_id = $_GET["id"];
        
        if(\classes\Poll::deletePollFood($con, $poll_food_id)){
            
            header("Location: View_poll.php");
        } else {
            echo "Fail To Delete The Poll";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

