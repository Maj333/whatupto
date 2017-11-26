<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WhatUpTo</title>
    <link rel="stylesheet" title="base"
          href="..\css\main.css" type="text/css"/>
    <link rel="stylesheet" title="base"
          href="..\css\profile.css" type="text/css"/>
    <link rel="shortcut icon" href="../img/favicon.ico">
</head>
<body>

<div class="main">
    <div class="rawbar">
        <div class="logo">
            <a href="http://whatuptoo.herokuapp.com/">
                <div id="logo-img"></div>
            </a>
            <p class="logo-name">WhatUpTo</p>
        </div>
        <div class="user">
            <img id="user-photo" src="https://frieze.com/sites/default/files/styles/general_teaser/public/editorial/johann-by-lukas-gansterer_thumb.jpg?itok=b_TNccXw">
            <p class="greeting">HI <?php $_SESSION['username'] ?>, <br/> WHAT ARE YOU UP TO?</p>
        </div>
    </div>
    <div class="center">
        <div class="sidebar">
            <div class="box-h1">ZNAJOMI</div>
            <div class="sidebar-znajomi">
            <div class="box">
                <a href="http://whatuptoo.herokuapp.com/"><img src="https://microbitpolska.org/static/img/profile.png"
                                                               alt="photo" style=" background-position: center center;
                                                               background-size: cover;
                                                               width: 30px;
                                                               height: 30px;
                                                               margin-top: 5px;"></a>
                <p class="name">znajomy<br/></p>
            </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                    <p class="name">znajomy<br/></p>
                </div>
            <div class="box">
                <a href="http://whatuptoo.herokuapp.com/"><img src="https://microbitpolska.org/static/img/profile.png"
                                                               alt="photo" style=" background-position: center center;
                                                               background-size: cover;
                                                               width: 30px;
                                                               height: 30px;
                                                               margin-top: 5px;"></a>
                <p class="name">znajomy<br/></p>
            </div>
            </div>
            <div class="box-h1">INNI UŻYTKOWNICY</div>
            <div class="sidebar-znajomi">
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img src="https://microbitpolska.org/static/img/profile.png"
                                                                   alt="photo" style=" background-position: center center;
                                                               background-size: cover;
                                                               width: 30px;
                                                               height: 30px;
                                                               margin-top: 5px;"></a>
                    <p class="name">znajomy<br/></p>
                </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img src="https://microbitpolska.org/static/img/profile.png"
                                                                   alt="photo" style=" background-position: center center;
                                                               background-size: cover;
                                                               width: 30px;
                                                               height: 30px;
                                                               margin-top: 5px;"></a>
                    <p class="name">znajomy<br/></p>
                </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img src="https://microbitpolska.org/static/img/profile.png"
                                                                   alt="photo" style=" background-position: center center;
                                                               background-size: cover;
                                                               width: 30px;
                                                               height: 30px;
                                                               margin-top: 5px;"></a>
                    <p class="name">znajomy<br/></p>
                </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img src="https://microbitpolska.org/static/img/profile.png"
                                                                   alt="photo" style=" background-position: center center;
                                                               background-size: cover;
                                                               width: 30px;
                                                               height: 30px;
                                                               margin-top: 5px;"></a>
                    <p class="name">znajomy<br/></p>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="search_container">

            </div>
            <div class="calendar_container">

            </div>
        </div>
    </div>
</div>

</body>
</html>