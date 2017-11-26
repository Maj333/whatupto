<?php
require_once ('user.php');
require_once ('connect.php');
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
echo '1';
    if (!isset($_POST['username']) || !isset($_POST['password'])) {

        $error = "Username or Password is invalid";
    } else {
        echo '2';
        Connect::connectionInit();
        echo "3";
        if(User::checkIfCredentialsAreCorrect($_POST['username'], $_POST['password'])) {
            echo 'test';
            session_start();
            $_SESSION['user'] = $_POST['username'];
            http_redirect('/index.php');
        }
        else {
            echo 'Bad username or password';
        }
}
?>
