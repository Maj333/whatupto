<?php
if(isset($_SESSION['username'])) {
    session_destroy();
}
header('index.php');
die('Wylogowano. Jesli nie nastapi przekierowanie kliknij <a href="index.php">tutaj</a>');

?>

