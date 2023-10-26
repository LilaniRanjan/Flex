<?php

class PopularFoodDetails {

    private $popular_food_image_file;
    private $popular_food_name;
    private $popular_food_default_price;
    private $popular_food_current_price;
    private $popular_food_vote;

    function __construct($popular_food_image_file, $popular_food_name, $popular_food_default_price, $popular_food_current_price, $popular_food_vote) {
        $this->popular_food_image_file = $popular_food_image_file;
        $this->popular_food_name = $popular_food_name;
        $this->popular_food_default_price = $popular_food_default_price;
        $this->popular_food_current_price = $popular_food_current_price;
        $this->popular_food_vote = $popular_food_vote;
    }

    function getPopular_food_image_file() {
        return $this->popular_food_image_file;
    }

    function getPopular_food_name() {
        return $this->popular_food_name;
    }

    function getPopular_food_default_price() {
        return $this->popular_food_default_price;
    }

    function getPopular_food_current_price() {
        return $this->popular_food_current_price;
    }

    function getPopular_food_vote() {
        return $this->popular_food_vote;
    }

    function setPopular_food_image_file($popular_food_image_file) {
        $this->popular_food_image_file = $popular_food_image_file;
    }

    function setPopular_food_name($popular_food_name) {
        $this->popular_food_name = $popular_food_name;
    }

    function setPopular_food_default_price($popular_food_default_price) {
        $this->popular_food_default_price = $popular_food_default_price;
    }

    function setPopular_food_current_price($popular_food_current_price) {
        $this->popular_food_current_price = $popular_food_current_price;
    }

    function setPopular_food_vote($popular_food_vote) {
        $this->popular_food_vote = $popular_food_vote;
    }

    public function addPopularFoodDetails($con) {
        $query = "INSERT INTO popularfooddetails (popular_food_image_file, popular_food_name, popular_food_default_price, popular_food_current_price, popula_food_vote) VALUES (?, ?, ?, ?, ?)";
        $pstmt = $con->prepare($query);
        $pstmt->bindValue(1, $this->popular_food_image_file);
        $pstmt->bindValue(2, $this->popular_food_name);
        $pstmt->bindValue(3, $this->popular_food_default_price);
        $pstmt->bindValue(4, $this->popular_food_current_price);
        $pstmt->bindValue(5, $this->popular_food_vote);
        $pstmt->execute();

        return $pstmt->rowCount() > 0;
    }

    public static function displayAllPopularFood($con) {
        $popular_food_details_list = array();
        $query = "SELECT * FROM popularfooddetails";
        $pstmt = $con->prepare($query);
        $pstmt->execute();
        while ($row = $pstmt->fetch(PDO::FETCH_ASSOC)) {
            $popular_food_image_file = $row['popular_food_image_file'];
            $popular_food_name = $row['popular_food_name'];
            $popular_food_default_price = $row['popular_food_default_price'];
            $popular_food_current_price = $row['popular_food_current_price'];
            $popular_food_vote = $row['popula_food_vote'];

            $popular_food_details = new PopularFoodDetails($popular_food_image_file, $popular_food_name, $popular_food_default_price, $popular_food_current_price, $popular_food_vote);

            $popular_food_details_list[] = $popular_food_details;
        }

        return $popular_food_details_list;
    }

    public function getPopularFoodIdByFoodName($food_name, $con) {
        try {
            $this->con = $con;
            $query = "SELECT popular_food_id FROM popularfooddetails WHERE popular_food_name = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $food_name);
            $pstmt->execute();
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return $row['popular_food_id'];
            } else {
                return null;
            }
        } catch (PDOException $exc) {
            die("ERROR in PopularFoodDetails class getPopularFoodIdByFoodName Method: " . $exc->getMessage());
        }
    }

    public function getPopularFoodDetailById($con, $id) {
        $query = "SELECT * FROM popularfooddetails WHERE popular_food_id = ?";
        $stmt = $con->prepare($query);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new PopularFoodDetails(
                    $row['popular_food_image_file'], $row['popular_food_name'], $row['popular_food_default_price'], $row['popular_food_current_price'], $row['popula_food_vote']
            );
        } else {
            return null;
        }
    }

    public function updatePopularFoodDetails($con, $id) {
        try {
            $query = "UPDATE popularfooddetails SET popular_food_name = ?, popular_food_default_price = ?, popular_food_current_price = ?, popula_food_vote = ? WHERE popular_food_id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $this->popular_food_name);
            $pstmt->bindValue(2, $this->popular_food_default_price);
            $pstmt->bindValue(3, $this->popular_food_current_price);
            $pstmt->bindValue(4, $this->popular_food_vote);
            $pstmt->bindValue(5, $id);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in PopularFoodDetails class updatePopularFoodDetails Method: " . $exc->getMessage());
        }
    }

    public static function deletePopularFoodDetails($con, $id) {
        try {
            $query = "DELETE FROM popularfooddetails WHERE popular_food_id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $id);

            return $pstmt->execute();
        } catch (PDOException $exc) {
            die("ERROR in PopularFoodDetails class deletePopularFoodDetails Method: " . $exc->getMessage());
        }
    }

    public function GetPopularFoodPriceById($popular_food_id, $con) {
        try {
            $this->con = $con;
            $query = "SELECT popular_food_current_price FROM popularfooddetails WHERE popular_food_id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $popular_food_id);
            $pstmt->execute();
            $row = $pstmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return $row['popular_food_current_price'];
            } else {
                return null;
            }
        } catch (PDOException $exc) {
            die("ERROR in PopularFoodDetails class GetPopularFoodPriceById Method :" . $exc->getMessage());
        }
    }

}
