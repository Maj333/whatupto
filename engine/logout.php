<?php
session_start();
if(isset($_SESSION['user'])) {
    session_destroy();
}
header('index.php');
die('Wylogowano. Jesli nie nastapi przekierowanie kliknij <a href="index.php">tutaj</a>');

?>

