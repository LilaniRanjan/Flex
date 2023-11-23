<?php

session_start();

require './classes/DbConnector.php';
require './classes/user.php';

use classes\DbConnector;
use classes\user;

$dbConnector = new DbConnector();
$db = $dbConnector->getConnection();

$user = new classes\User(null, null, null, null, null, null, null);
$user->setUserId($_SESSION['user_id']);

unset($_SESSION['user_id']);
unset($_SESSION['first_name']);
unset($_SESSION['last_name']);
unset($_SESSION['role']);

session_destroy();

header("Location: ./index.php");

