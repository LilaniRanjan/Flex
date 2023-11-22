<?php

namespace classes;

use PDOException;
use PDO;

class User {

    private $userId;
    private $firstName;
    private $lastName;
    private $emailAddress;
    private $phoneNumber;
    private $password;
    private $role;

    




    public function __construct($userId, $firstName, $lastName, $emailAddress, $phoneNumber, $password, $role) {
        $this->userId = $userId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->emailAddress = $emailAddress;
        $this->phoneNumber = $phoneNumber;
        $this->password = $password;
        $this->role = $role;
        
    }

    public function getUserId() {
        return $this->userId;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getEmailAddress() {
        return $this->emailAddress;
    }

    public function getPhoneNumber() {
        return $this->phoneNumber;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRole() {
        return $this->role;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setEmailAddress($emailAddress) {
        $this->emailAddress = $emailAddress;
    }

    public function setPhoneNumber($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function register($dbcon) {
        try {
            $query = "INSERT INTO user(user_id,first_name, last_name,email_address,phone_number, password, role) VALUES(?, ?, ?, ?, ?, ?, ?)";
            $pstmt = $dbcon->prepare($query);
            $pstmt->bindValue(1, $this->userId);
            $pstmt->bindValue(2, $this->firstName);
            $pstmt->bindValue(3, $this->lastName);
            $pstmt->bindValue(4, $this->emailAddress);
            $pstmt->bindValue(5, $this->phoneNumber);
            $pstmt->bindValue(6, $this->password);
            $pstmt->bindValue(7, $this->role);
            $pstmt->execute();
            return ($pstmt->rowCount() > 0);
        } catch (PDOException $exc) {
            die("Error in User class's Register Function: " . $exc->getMessage());
        }
    }

    public function authenticate($dbcon) {
        try {
            $query = "SELECT * FROM user WHERE user_id = ?";
            $pstmt = $dbcon->prepare($query);
            $pstmt->bindValue(1, $this->userId);
            $pstmt->execute();
            $rs = $pstmt->fetch(PDO::FETCH_OBJ);

            if (!empty($rs)) {
                $db_password = $rs->password;


                if ($this->password==$db_password) {
                    $this->role = $rs->role;
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $exc) {
            // Log or handle the exception more gracefully
            return "Error in User class's authenticate function: " . $exc->getMessage();
        }
    }
    
    public function getUserByThemUserId($con, $user_id){
        try{
            $query = "SELECT * FROM user WHERE user_id = ?";
            $pstmt = $con->prepare($query);
            $pstmt->bindValue(1, $user_id);
            $pstmt->execute();
            
            $row = $pstmt->fetch(PDO::FETCH_OBJ);
            
            if($row){
                return new User($row->user_id, $row->first_name, $row->last_name, $row->email_address, $row->phone_number, $row->password, $row->role);
            } else {
                return null;
            }
        } catch (Exception $exc){
            die("Error in User class's getUserByThemUserId function: " . $exc->getMessage());
        }
    }

    public function update($dbcon) {
        
    }

}
