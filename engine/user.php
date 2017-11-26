<?php
require_once 'connect.php';

error_reporting(-1);
ini_set('display_errors', 'On');

Class User {
    static public function addUser($username, $password) {
       /* $safe_username = stripslashes($username);
        $safe_password = stripslashes($password);
        $safe_username = trim(mysqli_real_escape_string(connect::$connection, $safe_username));
        $safe_password = trim(mysqli_real_escape_string(connect::$connection, $safe_password)); */// TODO:  hash later :D #security
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query(connect::$connection, $query) or die("Błąd przy dodawaniu użytkownika");
    }

    static public function checkIfUserExists($username) {
        $safe_username = stripslashes($username);
        $safe_username = trim(mysqli_real_escape_string(connect::$connection, $safe_username));

        $query = mysqli_query(connect::$connection, "SELECT * FROM users WHERE username='$safe_username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            return true;
        } else {
            return false;
        }
    }

    static public function checkIfCredentialsAreCorrect($username, $password) {
        $safe_username = stripslashes($username);
        $safe_username = trim(mysqli_real_escape_string(connect::$connection, $safe_username));
        $safe_password = stripslashes($password);
        $safe_password = trim(mysqli_real_escape_string(connect::$connection, $safe_password)); // TODO:  hash later :D #security


        $query = mysqli_query(connect::$connection, "SELECT * FROM users WHERE password='$safe_password' AND username='$safe_username'");
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            return true;
        } else {
            return false;
        }
    }
}