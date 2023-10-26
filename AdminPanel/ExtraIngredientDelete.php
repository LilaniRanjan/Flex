   <?php

require '../classes/ExtraIngredients.php';
require '../classes/DbConnector.php';

try{
    $dbConnector = new classes\DbConnector();
    $con = $dbConnector->getConnection();
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){
        $extra_ingredients_Id = $_GET["id"];
        
        if(\classes\ExtraIngredients::deleteExtraIngredientDetails($con, $extra_ingredients_Id)){
            echo "Extra Ingredient deleted successfully.";
            header("Location: AdminExtraIngredientManage.php");
        } else {
            echo "Fail in delete the Extra Ingredient";
        }
    }
} catch (PDOException $e) {
    header("Location: AdminExtraIngredientManage.php?error=1");
    echo "Error: " . $e->getMessage();
}

?>

