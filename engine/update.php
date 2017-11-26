<?php
/**
 * Created by PhpStorm.
 * User: gtluszcz
 * Date: 26.11.2017
 * Time: 11:35
 */
require_once "connect.php";
require_once "user.php";

connect::connectionInit();
session_start();


$starttime = $_GET['starttime'];
$finishtime = $_GET['finishtime'];
$day = $_GET['day'];
$tags= explode(",",$_GET['tags']);
$bid = $_GET['bid'];

echo '<script>console.log('.$bid.')</script>';
echo '<script>console.log('.$day.')</script>';

$querry = "UPDATE blocks
SET starttime='$starttime', finishtime='$finishtime',day='$day'
WHERE id='$bid'";

$result = mysqli_query(connect::$connection, $querry);
