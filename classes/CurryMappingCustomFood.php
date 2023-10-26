<?php

namespace classes;

class CurryMappingCustomFood {
    private $customize_food_Id;
    private $Curry_Id;
    
    function __construct($customize_food_Id, $Curry_Id) {
        $this->customize_food_Id = $customize_food_Id;
        $this->Curry_Id = $Curry_Id;
    }
    
    function getCustomize_food_Id() {
        return $this->customize_food_Id;
    }

    function getCurry_Id() {
        return $this->Curry_Id;
    }

    function setCustomize_food_Id($customize_food_Id) {
        $this->customize_food_Id = $customize_food_Id;
    }

    function setCurry_Id($Curry_Id) {
        $this->Curry_Id = $Curry_Id;
    }

    public function addCurryMappingCustomFood($con){
        try{
            $query = "INSERT INTO addCurryMappingCustomFood (customize_food_Id, Curry_Id) VALUES (?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->customize_food_Id);
            $pstmt->bindValue(2, $this->Curry_Id);
            return $pstmt->execute();
        }catch (PDOException $exc) {
            die("ERROR in CurryMappingCustomFood class addCurryMappingCustomFood Method: " . $exc->getMessage());
        }
        
    }

}
