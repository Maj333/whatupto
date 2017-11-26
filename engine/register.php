<?php
require_once('connect.php');
require_once('user.php');

error_reporting(-1);
ini_set('display_errors', 'On');

if (!empty($_POST)) { // jesli cos zostalo przeslane
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_r'])) {
        //register:
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_r = $_POST['password_r'];

        echo $username;
        echo $password;

        if ($password == $password_r) {

            Connect::connectionInit();

            if (!User::checkIfUserExists($username)) {
                User::addUser($username, $password);
                session_start();
                $_SESSION['username'] = $username;
                header('../index.php');
                die('Registered succesfully. Click <a href="../index.php">here</a> to log in.');
            } else {
                echo 'Username taken.';
                header('../index.php?action=register');
                die('Click <a href="../index.php?action=register">here</a> to try again.');
            }
        } else {
            echo 'passwords doesnt match.';
            header('../index.php?action=register');
            die('Click <a href="../index.php?action=register">here</a> to try again.');
        }
    }
}


?>

