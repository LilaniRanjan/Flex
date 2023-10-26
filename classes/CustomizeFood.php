<?php
namespace classes;

class CustomizeFood {
    private $rice_Id;
    private $spice_level_Id;
    private $portion_size_Id;
    
    function __construct($rice_Id, $spice_level_Id, $portion_size_Id) {
        $this->rice_Id = $rice_Id;
        $this->spice_level_Id = $spice_level_Id;
        $this->portion_size_Id = $portion_size_Id;
    }
    
    function getRice_Id() {
        return $this->rice_Id;
    }

    function getSpice_level_Id() {
        return $this->spice_level_Id;
    }

    function getPortion_size_Id() {
        return $this->portion_size_Id;
    }

    function setRice_Id($rice_Id) {
        $this->rice_Id = $rice_Id;
    }

    function setSpice_level_Id($spice_level_Id) {
        $this->spice_level_Id = $spice_level_Id;
    }

    function setPortion_size_Id($portion_size_Id) {
        $this->portion_size_Id = $portion_size_Id;
    }

    public function addCustomizedFood ($con){
        try{
            $query = "INSERT INTO CustomizeFood (rice_Id, spice_level_Id, portion_size_Id) VALUES (?, ?, ?)";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->rice_Id);
            $pstmt->bindValue(2, $this->spice_level_Id);
            $pstmt->bindValue(3, $this->portion_size_Id);
            $pstmt->execute();
            
            return $con->lastInsertId();;
        }catch (PDOException $exc) {
            die("ERROR in CustomizeFood class addCustomizedFood Method: " . $exc->getMessage());
        }
    }
    




    
    

    
}
