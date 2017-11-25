<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login2.css">
    <title>whatuptoo</title>
</head>
<body>
    <h1>WHAT UP TOO</h1>
    <?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    require 'engine/connect.php';
    $Connnection = new connect();
    $result=mysqli_query($Connnection->connection,"kurwa");
    print_r(mysqli_num_rows($result));

    while($row = mysqli_fetch_assoc($result)){
        echo $row[0];
        echo $row[1];
    }

    //$Connnection->closeConnection();
    ?>
</body>
</html>