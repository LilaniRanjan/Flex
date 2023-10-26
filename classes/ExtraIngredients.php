<?php

namespace classes;

use PDO;

class ExtraIngredients {
    private $extra_ingredients_name;
    private $extra_ingredients_price;
    
    function __construct($extra_ingredients_name, $extra_ingredients_price) {
        $this->extra_ingredients_name = $extra_ingredients_name;
        $this->extra_ingredients_price = $extra_ingredients_price;
    }

    function getExtra_ingredients_name() {
        return $this->extra_ingredients_name;
    }

    function getExtra_ingredients_price() {
        return $this->extra_ingredients_price;
    }

    function setExtra_ingredients_name($extra_ingredients_name) {
        $this->extra_ingredients_name = $extra_ingredients_name;
    }

    function setExtra_ingredients_price($extra_ingredients_price) {
        $this->extra_ingredients_price = $extra_ingredients_price;
    }

    public static function GetExtraIngredientDetails($con){
        $extra_ingredient_details = array();
        $query = "SELECT * FROM ExtraIngredients";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        
        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)){
            $extra_ingredients_name = $row['extra_ingredients_name'];
            $extra_ingredients_price = $row['extra_ingredients_price'];
            
            $extra_ingredient = new ExtraIngredients($extra_ingredients_name, $extra_ingredients_price);
            $extra_ingredient_details[] = $extra_ingredient;
        }
        
        return $extra_ingredient_details;
    }
    
    public function getExtraIngredientIdByName($ingredient_name, $con){
        try{
            $query = "SELECT extra_ingredients_Id  FROM ExtraIngredients WHERE extra_ingredients_name = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $ingredient_name);
            $pstmt->execute();

            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return $row['extra_ingredients_Id'];
            } else {
                return null;
            }
        }catch (PDOException $exc) {
            die("ERROR in ExtraIngredients class getExtraIngredientIdByName Method :" . $exc->getMessage());
        }
    }
    
    public function GetExtraIngedirntPriceById($extra_ingredients_Id, $con) {
        try {
            $this->con = $con;
            $query = "SELECT extra_ingredients_price FROM ExtraIngredients WHERE extra_ingredients_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $extra_ingredients_Id);
            $pstmt->execute();
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return $row['extra_ingredients_price'];
            } else {
                return null;
            }
        } catch (PDOException $exc) {
            die("ERROR in ExtraIngredients class GetExtraIngedirntPriceById Method :" . $exc->getMessage());
        }
    }
    
    public function addExtraIngredientDetails($con) {
        try {
            $query = "INSERT INTO ExtraIngredients (extra_ingredients_name, extra_ingredients_price) VALUES (?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->extra_ingredients_name);
            $pstmt->bindValue(2, $this->extra_ingredients_price);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in ExtraIngredients class addExtraIngredientDetails Method: " . $exc->getMessage());
        }
    }
    
    public function getExtraIngredientDetailById($con, $id) {
        try{
            $query = "SELECT * FROM ExtraIngredients WHERE extra_ingredients_Id = ?";
            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return new ExtraIngredients($row['extra_ingredients_name'], $row['extra_ingredients_price']);
            } else {
                return null;
            }
            
        }catch (PDOException $exc) {
            die("ERROR in ExtraIngredients class getExtraIngredientDetailById Method: " . $exc->getMessage());
        }
    }
    
    public function updateExtraIngredientDetails($con, $id) {
        try {
            $query = "UPDATE ExtraIngredients SET extra_ingredients_name = ?, extra_ingredients_price = ? WHERE extra_ingredients_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->extra_ingredients_name);
            $pstmt->bindValue(2, $this->extra_ingredients_price);
            $pstmt->bindValue(3, $id);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in ExtraIngredients class updateExtraIngredientDetails Method: " . $exc->getMessage());
        }
    }
    
    public static function deleteExtraIngredientDetails($con, $id) {
        try {
            $query = "DELETE FROM ExtraIngredients WHERE extra_ingredients_Id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $id);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in ExtraIngredients class deleteExtraIngredientDetails Method :" . $exc->getMessage());
        }
    }
}
