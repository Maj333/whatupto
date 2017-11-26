<?php
//$users = User::getAllUsers();
//var_dump($users);
?>
<main class="profile-wrapper">
    <div class="main">
        <div class="rawbar">
            <div class="logo">
                <a href="index.php">
                    <div id="logo-img"></div>
                </a>
                <p class="logo-name">WhatUpTo</p>
            </div>
            <div class="user">
                <img id="user-photo" src="img/andrzej.jpg" alt="profile image">
                <p class="greeting">Hi <?php echo $_SESSION['username']; ?>, what are you up to?</p>
            </div>
        </div>
        <div class="center">
            <div class="menu">
                <a href="index.php?action=settings"><img class="setting" src="img/setting.png"></a>
                <a href="index.php?action=logout"><img class="log-out" src="img/log-out.png"></a>
            </div>
            <div class="sidebar">
                <div class="box-h1">ZNAJOMI</div>
                <div class="sidebar-znajomi">

                    <?php
                    require_once "engine/connect.php";
                    require_once "engine/user.php";
                    connect::connectionInit();
                    $lol = user::getAllUsers();
                    foreach($lol as $user){
                        echo "<div class=\"box\">
                        <a href=\"http://whatuptoo.herokuapp.com/\"><img class=\"znajomy-photo\" src=\"https://microbitpolska.org/static/img/profile.png\"></a>
                        <p class=\"name\">".$user."</p>
                    </div>";
                    }
                    
                    ?>
                </div>
                <div class="box-h1">INNI UŻYTKOWNICY</div>
                <div class="sidebar-znajomi">
                    <div class="box">
                        <a href="http://whatuptoo.herokuapp.com/"><img class="znajomy-photo" src="https://microbitpolska.org/static/img/profile.png"></a>
                        <p class="name">znajomy</p>
                    </div>
                </div>
            </div>
        </div>
                <div class="calendar">
                    <div class="calendar-header">
                            <h1 class="add-title">Update your calendar with plans</h1>

                                <input class="add-field" name="action-tag" type="text" placeholder="Tags">
                                <input class="add-field" name="day-of-the-week" type="text" placeholder="Weekday">
                                <input class="add-field" name="hours" type="text" placeholder="Starting Hour">
                                <input class="add-field" name="hours" type="text" placeholder="Finishing Hour">
                                <button class="add-button">Add</button>

                        <div class="prev">&#10094;</div>
                        <div class="next">&#10095;</div>
                        <div class="date">27.11 - 03.12</div>
                    </div>
                    <div class="weekdays">
                        <div class ="day">
                            <div class="name-day">Godziny</div>
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
                                <div class="name-day">Pon</div>
                                <div class="plan">
                                    <div class="blocks" style="top: 0; height: 8.3%;">
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
                                <div class="name-day">Wt</div>
                                <div class="plan">
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">Śr</div>
                                <div class="plan">
                                    <div class="blocks" style="top: 20%; height: 70px;">
                                        <p>cos</p>
                                    </div>
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">Czw</div>
                                <div class="plan">
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">Pt</div>
                                <div class="plan">
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">So</div>
                                <div class="plan">
                                    <div class="blocks" style="top: 28%; height: 150px;">
                                        <p>cos</p>
                                    </div>
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">Nd</div>
                                <div class="plan">
                                </div>
                            </div>
                    </div>
                </div>
            </div>
</main>
