<?php
/**
 * Created by PhpStorm.
 * User: gtluszcz
 * Date: 25.11.2017
 * Time: 22:43
 */
require_once 'connect.php';

Class User{
    static public function addUser($username, $password){

        $query="INSERT INTO users (username, password) VALUES ($username, $password);";
        $result=mysqli_query(connect::$connection,$query)or die("Błąd przy dodawaniu użytkownika");

    }
}