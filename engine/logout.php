<?php
if (isset($_SESSION['username'])) {
    session_destroy();
}
header('location: index.php', true, 301);
die('Wylogowano. Jesli nie nastapi przekierowanie kliknij <a href="index.php">tutaj</a>');

?>

