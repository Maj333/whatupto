<?php
/**
 * Created by PhpStorm.
 * User: gtluszcz
 * Date: 25.11.2017
 * Time: 15:59
 */


Class Connect{

    static private $database = "whatuptoo";
    static private $host= "mysql1.gear.host";
    static private $password="ala123$";
    static private $user= "whatuptoo";
    static private $db_port = '3306';
    static public $connection;


    static public function connectionInit()
    {
        connect::$connection = mysqli_connect(connect::$host, connect::$user, connect::$password,connect::$database);

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }else{
            echo "connection ok";
        }
    }

    static public function closeConnection(){
        mysqli_close(connect::$connection);
    }

}


?>