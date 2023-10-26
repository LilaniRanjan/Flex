<?php

namespace classes;

class ExtraIngredientsMappingCustomFood {
    private $customize_food_Id;
    private $extra_ingredients_Id;
    
    function __construct($customize_food_Id, $extra_ingredients_Id) {
        $this->customize_food_Id = $customize_food_Id;
        $this->extra_ingredients_Id = $extra_ingredients_Id;
    }
    
    function getCustomize_food_Id() {
        return $this->customize_food_Id;
    }

    function getExtra_ingredients_Id() {
        return $this->extra_ingredients_Id;
    }

    function setCustomize_food_Id($customize_food_Id) {
        $this->customize_food_Id = $customize_food_Id;
    }

    function setExtra_ingredients_Id($extra_ingredients_Id) {
        $this->extra_ingredients_Id = $extra_ingredients_Id;
    }

    public function addExtraIngredientsMappingCustomFood($con){
        try{
            $query = "INSERT INTO ExtraIngredientsMappingCustomFood (customize_food_Id, extra_ingredients_Id) VALUES (?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->customize_food_Id);
            $pstmt->bindValue(2, $this->extra_ingredients_Id);
            return $pstmt->execute();
        }catch (PDOException $exc) {
            die("ERROR in ExtraIngredientsMappingCustomFood class addExtraIngredientsMappingCustomFood Method: " . $exc->getMessage());
        }
    }

}
