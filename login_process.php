<?php
session_start();

use classes\DbConnector;

require 'classes/User.php'; 
require_once 'classes/DbConnector.php'; 

// Create a database connection
$dbConnector = new DbConnector();
$db = $dbConnector->getConnection();



if (isset($_POST["user_id"], $_POST["password"])) {
    if (empty($_POST["user_id"]) || empty($_POST["password"])) {
        $location = "Login.php?status=1";
    } else {
        $user_id = $_POST["user_id"];
        $password = $_POST["password"];
        $user = new classes\User($user_id, null, null, null, null, $password, null);

        if ($user->authenticate($db)) {
            $role = $user->getRole();

            // Set the user's role in the session
            $_SESSION["role"] = $role;

            // Redirect based on the user's role
            if ($role == 'admin') {
                $location = "AdminPanel/AdminHome.php";
            } elseif ($role == 'cashier') {
                $location = "cashier_dashboard.php";
            } elseif ($role == 'student') {
                echo 'Hello';
                $location = "index.php";
            } else {
                // Handle other roles or errors
                $location = "Login.php?status=3";
            }
        } else {
            $location = "Login.php?status=2"; // Invalid credentials
        }
    }
} else {
    $location = "Login.php?status=0"; // Form not submitted
}

header('Location: ' . $location);
?>
