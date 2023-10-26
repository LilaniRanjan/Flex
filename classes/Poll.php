<?php
namespace classes;
use PDOException;
use PDO;

class Poll {
    
    private $poll_created_date;
    private $food_name;
   
    public function __construct($poll_created_date, $food_name) {
        $this->poll_created_date = $poll_created_date;
        $this->food_name = $food_name;
    }
    public function getPoll_created_date() {
        return $this->poll_created_date;
    }

    public function getFood_name() {
        return $this->food_name;
    }

    public function setPoll_created_date($poll_created_date) {
        $this->poll_created_date = $poll_created_date;
    }

    public function setFood_name($food_name) {
        $this->food_name = $food_name;
    }

        

    public static function getPoll($dbcon) {
   try {
            
            $food_poll = array();
            $query = "SELECT * FROM poll_food";
            $stmt = $dbcon->prepare($query);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                $Polls = new Poll($row->poll_created_date, $row->food_name);
                $food_poll[] = $Polls;
            }

            return $food_poll;
        } catch (PDOException $exc) {
            die("Error In Fetching Poll Details. Try Again." . $exc->getMessage());
        }
  
}
  public function getAddPoll($dbcon) {
        try {
            $query = "INSERT INTO poll_food (poll_created_date, food_name) VALUES (?, ?)";
            $stmt = $dbcon->prepare($query);
            $stmt->bindValue(1, $this->poll_created_date);
            $stmt->bindValue(2, $this->food_name);
            return $stmt->execute();
        } catch (PDOException $exc) {
            die("Error In Adding Poll: " . $exc->getMessage());
        }
    }   
   
    public function GetPollIdByPollName($food_name, $dbcon) {
        try {
            $this->con = $dbcon;
            $query = "SELECT poll_food_id FROM poll_food WHERE food_name = ?";
            $stmt = $dbcon->prepare($query);
            $stmt->bindValue(1, $food_name);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                return $row['poll_food_id'];
            } else {
                return null;
            }
        } catch (PDOException $exc) {
            die("Error In Poll Details :" . $exc->getMessage());
        }
    } 
    public static function getAllPoll($dbcon) {
        $poll_list = array();
        try {
            $query = "SELECT * FROM poll_food";
            $stmt = $dbcon->prepare($query);
            $stmt->execute();
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $poll_created_date = $row['poll_created_date'];
                $food_name = $row['food_name'];

                $poll_details = new Poll($poll_created_date, $food_name);
                $poll_list[] = $poll_details;
            }
        } catch (PDOException $exc) {
            die("Error In Getting Poll Details :" . $exc->getMessage());
        }
        return $poll_list;
    }
         public static function deletePollFood($dbcon, $poll_food_id) {
        try {
            $obj = new DbConnector();
            $con = $obj->getConnection();
            $query = "DELETE FROM poll_food WHERE poll_food_id = ?";
            $stmt = $con->prepare($query);
            $stmt->bindValue(1, $poll_food_id);

            return $stmt->execute();
        } catch (PDOException $exc) {
            die("Error In Deleteing Your Request :" . $exc->getMessage());
        }
    } 
       public function getPollById($dbcon, $poll_food_id) {
        $query = "SELECT * FROM poll_food WHERE poll_food_id = ?";
        $stmt = $dbcon->prepare($query);
        $stmt->bindValue(1, $poll_food_id);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            return new Poll($row['poll_created_date'],$row['food_name']);
        } else {
            return null;
        }
    } 
      public function updatePoll($dbcon, $poll_food_id) {
        try {
            $query = "UPDATE poll_food SET poll_created_date=?,food_name = ? WHERE poll_food_id = ?";
            $pstmt = $dbcon->prepare($query);
            $pstmt->bindValue(1, $this->poll_created_date);
            $pstmt->bindValue(2, $this->food_name);
            $pstmt->bindValue(3, $poll_food_id); 
            return $pstmt->execute();
            
        } catch (PDOException $exc) {
            die("Error In Updating Poll : " . $exc->getMessage());
        }
    }
  }
    
    

