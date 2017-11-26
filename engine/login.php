<?php
require_once ('user.php');
require_once ('connect.php');
    if (!isset($_POST['username']) || !isset($_POST['password'])) {

        $echo = "Username or Password is invalid";
    } else {
        Connect::connectionInit();
        if(User::checkIfCredentialsAreCorrect($_POST['username'], $_POST['password'])) {
            session_start();
            $_SESSION['username'] = $_POST['username'];
            header("location: ../index.php", true, 301);
            die('Zalogowano. Jesli nie nastapi przekierowanie kliknij <a href="../index.php">tutaj</a>');
        }
        else {
            header("location: ../index.php", true, 301);
            die('Logowanie nie powiodlo sie. <a href="../index.php">Sprobuj ponownie</a>.');
        }
}
?>
