   <?php

require '../classes/PopularFoodDetails.php';
require '../classes/DbConnector.php';

try{
    $dbConnector = new classes\DbConnector();
    $con = $dbConnector->getConnection();
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){
        $popular_food_Id = $_GET["id"];
        
        if(PopularFoodDetails::deletePopularFoodDetails($con, $popular_food_Id)){
            echo "Popular food details deleted successfully.";
            header("Location: AdminPopularFoodManage.php");
        } else {
            echo "Fail in delete the Popular food";
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>

