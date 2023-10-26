   <?php

require '../classes/CurryDetails.php';
require '../classes/DbConnector.php';

try{
    $dbConnector = new classes\DbConnector();
    $con = $dbConnector->getConnection();
    
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])){
        $curry_id = $_GET["id"];
        
        if(\classes\CurryDetails::deleteCurryDetails($con, $curry_id)){
            echo "Curry deleted successfully.";
            header("Location: AdminCurryManage.php");
        } else {
            echo "Fail in delete the Curry";
        }
    }
} catch (PDOException $e) {
    header("Location: AdminCurryManage.php?error=1");
    echo "Error: " . $e->getMessage();
}

?>

