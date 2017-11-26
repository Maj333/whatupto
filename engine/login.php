<?php
require_once ('user.php');
require_once ('connect.php');
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
echo '1';
    if (!isset($_POST['username']) || !isset($_POST['password'])) {

        $error = "Username or Password is invalid";
    } else {
        Connect::connectionInit();
        if(User::checkIfCredentialsAreCorrect($_POST['username'], $_POST['password'])) {
            session_start();
            $_SESSION['user'] = $_POST['username'];
            header("../index.php");
            die('Zalogowano. Jesli nie nastapi przekierowanie kliknij <a href="/index.php">tutaj</a>');
        }
        else {
            header("../index.php");
            die('Logowanie nie powiodlo sie. <a href="/index.php">Sprobuj ponownie</a>.');
        }
}
?>
