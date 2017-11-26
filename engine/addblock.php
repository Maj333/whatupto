<?php
/**
 * Created by PhpStorm.
 * User: gtluszcz
 * Date: 26.11.2017
 * Time: 06:13
 */
require_once "connect.php";
require_once "user.php";

connect::connectionInit();


$starttime = $_GET['starttime'];
$finishtime = $_GET['finishtime'];
$day = $_GET['day'];
$tags= $_GET['tags'];



$query = "INSERT INTO blocks (starttime, finishtime, day) VALUES ('$starttime', '$finishtime','$day')";
mysqli_query(connect::$connection,$query);
?>

