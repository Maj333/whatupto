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
        <div class="menu"></div>
        <div class="sidebar">
            <div class="box-h1">ZNAJOMI</div>
            <div class="sidebar-znajomi">
            <div class="box">
                <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                <p class="name">znajomy<br/></p>
            </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                    <p class="name">znajomy<br/></p>
                </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                    <p class="name">znajomy<br/></p>
                </div>
            </div>
            <div class="box-h1">INNI UŻYTKOWNICY</div>
            <div class="sidebar-znajomi">
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                    <p class="name">znajomy<br/></p>
                </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                    <p class="name">znajomy<br/></p>
                </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                    <p class="name">znajomy<br/></p>
                </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                    <p class="name">znajomy<br/></p>
                </div>
                <div class="box">
                    <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                    <p class="name">znajomy<br/></p>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="search_container">

            </div>
            <div class="calendar_container">
                <div class="calendar">
                    <div class="week">
                        <div class="calendar_add">
                            <form class="add-form" action="" method="">
                                <input class="add-field" name="action-tag" type="text" placeholder="Tags">
                                <input class="add-field" name="day-of-the-week" type="text" placeholder="Date">
                                <button class="add-button" type="submit">Add</button>
                            </form>
                        </div>
                        <div class="prev"><p>&#10094;</p></div>
                        <div class="next"><p>&#10095;</p></div>
                        <div class="date">
                            <p>27.11-03.12</p>
                        </div>
                    </div>
                    <div class="weekdays">
                        <div class ="day">
                            <div class="name"><p>Godziny</p></div>
                            <div class="plan">
                                <ul class="hours">
                                    <li>0:00-1:00</li>
                                    <li>1:00-2:00</li>
                                    <li>2:00-3:00</li>
                                    <li>3:00-4:00</li>
                                    <li>4:00-5:00</li>
                                    <li>5:00-6:00</li>
                                    <li>6:00-7:00</li>
                                    <li>7:00-8:00</li>
                                    <li>8:00-9:00</li>
                                    <li>9:00-10:00</li>
                                    <li>10:00-11:00</li>
                                    <li>11:00-12:00</li>
                                    <li>12:00-13:00</li>
                                    <li>13:00-14:00</li>
                                    <li>14:00-15:00</li>
                                    <li>15:00-16:00</li>
                                    <li>16:00-17:00</li>
                                    <li>17:00-18:00</li>
                                    <li>18:00-19:00</li>
                                    <li>19:00-20:00</li>
                                    <li>20:00-21:00</li>
                                    <li>21:00-22:00</li>
                                    <li>22:00-23:00</li>
                                    <li>23:00-24:00</li>
                                </ul>
                            </div>
                        </div>
                        <div class ="day">
                            <div class="name"><p>Poniedziałek</p></div>
                            <div class="plan">
                                <div class="blocks" style="top: 0%; height: 8.3%;">
                                    <p>cos</p>
                                </div>
                                <div class="blocks" style="top: 50%; height: 5%;">
                                    <p>cos</p>
                                </div>
                                <div class="blocks" style="top: 57%; height: 10%">
                                    <p>cos</p>
                                </div>
                                <div class="blocks" style="top: 81%; height: 7%">
                                    <p>cos</p>
                                </div>
                            </div>

                        </div>
                        <div class ="day">
                            <div class="name"><p>Wtorek</p></div>
                            <div class="plan">
                            </div>
                        </div>

                        <div class ="day">
                            <div class="name"><p>Środa</p></div>
                            <div class="plan">
                                <div class="blocks" style="top: 20%; height: 70px;">
                                    <p>cos</p>
                                </div>
                            </div>
                        </div>

                        <div class ="day">
                            <div class="name"><p>Czwartek</p></div>
                            <div class="plan">
                            </div>
                        </div>

                        <div class ="day">
                            <div class="name"><p>Piątek</p></div>
                            <div class="plan">
                            </div>
                        </div>

                        <div class ="day">
                            <div class="name"><p>Sobota</p></div>
                            <div class="plan">
                                <div class="blocks" style="top: 28%; height: 150px;">
                                    <p>cos</p>
                                </div>
                            </div>
                        </div>

                        <div class ="day">
                            <div class="name"><p>Niedziela</p></div>
                            <div class="plan">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>