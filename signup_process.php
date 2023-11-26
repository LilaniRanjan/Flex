<?php
namespace classes;

require './classes/DbConnector.php';
require './classes/User.php';

try {
    $dbConnector = new \classes\DbConnector();
    $dbcon = $dbConnector->getConnection();

   
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

if (isset($_POST["userId"],$_POST["firstName"], $_POST["lastName"],$_POST["emailAddress"], $_POST["phoneNumber"], $_POST["password"])) {
    if (empty($_POST["userId"])|| empty($_POST["firstName"]) || empty($_POST["lastName"])||empty($_POST["emailAddress"]) || empty($_POST["phoneNumber"]) || empty($_POST["password"])) {
        $location = "sign_up.php?status=1";
    } else {
        $userId = $_POST["userId"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $emailAddress = $_POST["emailAddress"];
        $phoneNumber = $_POST["phoneNumber"];
//        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $password = $_POST["password"];
        $role = "student";
        $user = new User($userId,$firstName, $lastName,  $emailAddress,$phoneNumber, $password, $role);
        if($user->register($dbcon)){
            $location = "signup.php?status=2";
        }
        else{
            $location = "signup.php?status=3";
        }
    }
} else {
    $location = "signup.php?status=0";
}
header("Location:" . $location);