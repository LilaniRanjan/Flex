<?php

require './classes/DbConnector.php';
require './classes/CustomizeFood.php';
require './classes/CurryMappingCustomFood.php';
require './classes/ExtraIngredientsMappingCustomFood.php';
require './classes/RiceDetails.php';
require './classes/CurryDetails.php';
require './classes/ExtraIngredients.php';

try {
    $db_con = new \classes\DbConnector();
    $con = $db_con->getConnection();
} catch (PDOException $exc) {
    echo "Error in addFoodCusPage DbConnection: " . $exc->getMessage();
}

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        if (isset($_POST['rice'], $_POST['curry'], $_POST['spice'], $_POST['portion'], $_POST['extra'])) {
            $selectedRiceId = $_POST['rice'];
            $selectedCurries = isset($_POST["curry"]) ? $_POST["curry"] : [];
            $selectedSpiceLevelId = $_POST['spice'];
            $selectedPortionSizeId = $_POST['portion'];
            $selectedExtras = isset($_POST["extra"]) ? $_POST["extra"] : [];

            try {
                $cusobj = new \classes\CustomizeFood($selectedRiceId, $selectedSpiceLevelId, $selectedPortionSizeId);
                $customizeFoodId = $cusobj->addCustomizedFood($con);
                
                $rice_price;
                $curry_total_price = 0;
                $extra_ingredients_total_price = 0;
                
                $rice_obj = new \classes\RiceDetails(null, null);
                $rice_price = $rice_obj->GetRicePriceById($selectedRiceId, $con);
                echo $rice_price."<br>";
                
                if($customizeFoodId){
                    foreach ($selectedCurries as $curryId) {
                        $curry_mapping_obj = new \classes\CurryMappingCustomFood($customizeFoodId, $curryId);
                        $curry_added_obj = $curry_mapping_obj->addCurryMappingCustomFood($con);
                        if($curry_added_obj){
                            echo 'Curry Mapping table added successfully';
                            
                            $curry_obj = new \classes\CurryDetails(null, null);
                            $curry_price = $curry_obj->GetCurryPriceById($curryId, $con);
                            echo $curry_price."<br>";
                            $curry_total_price = $curry_total_price + $curry_price;
                            echo $curry_total_price."<br>";
                        } else {
                            echo 'Curry Mapping table added Failed';
                        }
                    }
                    
                    foreach ($selectedExtras as $extraId) {
                        $extra_ingrediends_obj = new \classes\ExtraIngredientsMappingCustomFood($customizeFoodId, $extraId);
                        $extra_ingrediant_added_obj = $extra_ingrediends_obj->addExtraIngredientsMappingCustomFood($con);
                        if($extra_ingrediant_added_obj){
                            echo 'ExtraIngrediant Mapping table added successfully';
                            
                            $extra_ingedient_obj = new classes\ExtraIngredients(null, null);
                            $extra_ingredient_price = $extra_ingedient_obj->GetExtraIngedirntPriceById($extraId, $con);
                            echo $extra_ingredient_price."<br>";
                            $extra_ingredients_total_price = $extra_ingredients_total_price + $extra_ingredient_price;
                            echo $extra_ingredients_total_price;
                        } else {
                            echo 'ExtraIngrediant Mapping table added Failed';
                        }
                    }
                    
                    $total_price = $rice_price + $curry_total_price + $extra_ingredients_total_price;
                    echo $total_price;
                    
                    header("Location: foodCusPage.php?total=".$total_price);
                } else {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Added Failed!
                    </div>
                    <?php
                }
                
            } catch (Exception $exc) {
                die("ERROR in save CustomizeFood function" . $exc->getMessage());
            }
            
        } else {
            echo 'Helooo';
        }
    } else {
        echo 'Hiiiii';
    }
} catch (Exception $exc) {
    die("ERROR in Customize food" . $exc->getMessage());
}
?>

