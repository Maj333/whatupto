<?php
require_once('connect.php');
require_once('user.php');

if (!empty($_POST)) { // jesli cos zostalo przeslane
    if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_r'])) {
        //register:
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_r = $_POST['password_r'];

        if ($password == $password_r) {

            Connect::connectionInit();

            if (!User::checkIfUserExists($username)) {
                User::addUser($username, $password);
                session_start();
                $_SESSION['username'] = $username;
                header('location: ../index.php', true, 301);
                die('Registered succesfully. Click <a href="../index.php">here</a> to log in.');
            } else {
                echo 'Username taken.';
                header('location: ../index.php?action=register', true, 301);
                die('Click <a href="../index.php?action=register">here</a> to try again.');
            }
        } else {
            header('location: ../index.php?action=register', true, 301);
            die('Click <a href="../index.php?action=register">here</a> to try again.');
        }
    }
}

?>