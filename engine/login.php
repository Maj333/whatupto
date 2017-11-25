<?php
/**
 * Created by PhpStorm.
 * User: gtluszcz
 * Date: 25.11.2017
 * Time: 16:00
 */
$connection = new connect();
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    } else {
// Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter

// To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = trim(mysqli_real_escape_string($username));
        $password = trim(mysqli_real_escape_string($password)); // TODO:  hash later :D #security
// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
        $query = mysqli_query("SELECT * FROM login WHERE password='$password' AND username='$username'", $connection);
        $rows = mysqli_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user'] = $username; // Initializing Session
            header("location: profile.php"); // Redirecting To Other Page
        } else {
            $error = "Username or Password is invalid";
        }
    }
}
?>

