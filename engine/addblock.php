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
session_start();

echo '<script>console.log("cosik")</script>';

$starttime = $_GET['starttime'];
$finishtime = $_GET['finishtime'];
$day = $_GET['day'];
$tags= explode(",",$_GET['tags']);


echo '<script>console.log("cosik")</script>';
$username= $_SESSION['username'];
$query = "SELECT id FROM users WHERE username='$username'";
$result = mysqli_query(connect::$connection,$query);
if($row = mysqli_fetch_assoc($result)){
    $userid=$row['id'];
};

$query1 = "INSERT INTO blocks (starttime, finishtime, day) VALUES ('$starttime', '$finishtime','$day')";
mysqli_query(connect::$connection,$query1);

$query = "SELECT id FROM blocks WHERE id = (SELECT MAX(id) FROM blocks)";
$result = mysqli_query(connect::$connection,$query);
if($row = mysqli_fetch_assoc($result)){
    $blockid=$row['id'];
};

$query2 = "INSERT INTO combineub (user_id, block_id) VALUES ('$userid', '$blockid')";
mysqli_query(connect::$connection,$query2);

$query = "SELECT id FROM combineub WHERE id = (SELECT MAX(id) FROM combineub)";
$result = mysqli_query(connect::$connection,$query);
if($row = mysqli_fetch_assoc($result)){
    $combineub_id=$row['id'];
};

foreach($tags as $tag){
    $query1 = "INSERT INTO tags (tag_name) VALUES ('$tag')";
    mysqli_query(connect::$connection,$query1);

    $query = "SELECT id FROM tags WHERE tag_name = '$tag'";
    $result = mysqli_query(connect::$connection,$query);
    if($row = mysqli_fetch_assoc($result)){
        $tag_id=$row['id'];
    };
    $query1 = "INSERT INTO combinetub (tags_id, combineUB_id) VALUES ('$tag_id', '$combineub_id')";
    mysqli_query(connect::$connection,$query1);
}


?>

