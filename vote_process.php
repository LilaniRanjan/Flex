<?php
namespace classes;

require './classes/DbConnector.php';
require './classes/Poll.php';

try {
    $dbConnector = new \classes\DbConnector();
    $dbcon = $dbConnector->getConnection();

   
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
if (isset($_POST["vote"])) {
    if (empty($_POST["vote"])) {
        header("Location: Vote.php?error=1"); 
    } else {
        $vote = $_POST["vote"];
        
       date_default_timezone_set('Asia/Colombo');
       $currentDateTime = date('Y-m-d H:i:s');
       
        
        try {
           
            $allPolls = Poll::getPoll($dbcon);

         
            $selectedPoll = null;
            foreach ($allPolls as $poll) {
                if ($poll->getFood_name() === $vote) {
                    $selectedPoll = $poll;
                    break;
                }
            }

            if ($selectedPoll) {
               
                $food_poll_id = $selectedPoll->GetPollIdByPollName($vote, $dbcon);

                $query = "INSERT INTO poll_vote(votted_date_and_time, poll_food_id) VALUES(?, ?)";
                $pstmt = $dbcon->prepare($query);
                $pstmt->bindValue(1, $currentDateTime);
                $pstmt->bindValue(2, $food_poll_id);
              if($pstmt->execute()){
                  header("Location:Vote.php?message=1");
              }
                
            } else {
                echo "Poll Has Expired.Please Try Again."; 
            }
        } catch (PDOException $exc) {
            echo "Error In Storing Your Vote. Please Try Again " . $exc->getMessage();
        }
    }
}