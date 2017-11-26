<?php
require_once ('connect.php');
require_once ('user.php');

Connect::connectionInit();

if(!empty($_POST)) { // jesli cos zostalo przeslane
    if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_r'])) {
        //register:
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password_r = $_POST['password_r'];

        if($password == $password_r) {



        if(!User::checkIfUserExists($username)) {
            User::addUser($username,$password);
        } else {
            echo 'Username taken.';
            header('index.php?action=register');
            die('Click <a href="index.php?action=register">here</a> to try again.');
        }
        }
        else {
            echo 'passwords doesnt match.';
            header('index.php?action=register');
            die('Click <a href="index.php?action=register">here</a> to try again.');
        }
    }
}


?>

