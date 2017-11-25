<?php
/**
 * Created by PhpStorm.
 * User: gtluszcz
 * Date: 25.11.2017
 * Time: 15:59
 */


Class connect {

    private $database = "whatuptoo";
    private $host = "mysql1.gear.host";
    private $password = "ala123$";
    private $user = "whatuptoo";
    private $db_port = '3306';
    public $connection;


    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        } else {
            echo "connection ok";
        }
    }

    public function closeConnection()
    {
        mysqli_close($this->connection);
    }


    public function __destruct()
    {
        $this->closeConnection();
    }
}


?>