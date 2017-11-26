<?php
/**
 * Created by PhpStorm.
 * User: gtluszcz
 * Date: 26.11.2017
 * Time: 09:47
 */
require_once 'engine/connect.php';
require_once 'engine/blocks.php';


error_reporting(-1);
ini_set('display_errors', 'On');
$table_height = 60 * 24;

connect::connectionInit();

?>

                                <div class ="day">
                                <div class="name-day">Pon</div>
                                <div class="plan">
                                    <?php
                                    $result = blocks::getAllBlocks();
                                    while($row = mysqli_fetch_assoc($result)) {
                                        if ($_SESSION['username'] == $row['username'] and $row['day'] == 1) {
                                            echo '<div class="blocks" style="top: '.$row['starttime']/$table_height*100 .'%; height: '.($row['finishtime']-$row['starttime'])*100/$table_height.'%;">
                                            <p>cos</p>
                                            <input class="starttime hidden" placeholder="' . $row['starttime'] . '" readonly>
                                            <input class="endtime hidden" placeholder="' . $row['finishtime'] . '" readonly>
                                            <input class="blockid hidden" placeholder="'.$row['bid'].'" readonly>
                                            <input class="day_number hidden" placeholder="'.$row['day'].'" readonly>
                                            </div>';
                                        }
                                    }?>
                                </div>

                            </div>
                            <div class ="day">
                                <div class="name-day">Wt</div>
                                <div class="plan">
                                    <?php
                                    $result = blocks::getAllBlocks();
                                    while($row = mysqli_fetch_assoc($result)) {
                                        if ($_SESSION['username'] == $row['username'] and $row['day'] == 2) {
                                            echo '<div class="blocks" style="top: '.$row['starttime']/$table_height*100 .'%; height: '.($row['finishtime']-$row['starttime'])*100/$table_height.'%;">
                                            <p>cos</p>
                                            <input class="starttime hidden" placeholder="' . $row['starttime'] . '" readonly>
                                            <input class="endtime hidden" placeholder="' . $row['finishtime'] . '" readonly>
                                            <input class="blockid hidden" placeholder="'.$row['bid'].'" readonly>
                                            <input class="day_number hidden" placeholder="'.$row['day'].'" readonly>
                                            </div>';
                                        }
                                    }?>
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">Śr</div>
                                <div class="plan">
                                    <?php
                                    $result = blocks::getAllBlocks();
                                    while($row = mysqli_fetch_assoc($result)) {
                                        if ($_SESSION['username'] == $row['username'] and $row['day'] == 3) {
                                            echo '<div class="blocks" style="top: '.$row['starttime']/$table_height*100 .'%; height: '.($row['finishtime']-$row['starttime'])*100/$table_height.'%;">
                                            <p>cos</p>
                                            <input class="starttime hidden" placeholder="' . $row['starttime'] . '" readonly>
                                            <input class="endtime hidden" placeholder="' . $row['finishtime'] . '" readonly>
                                            <input class="blockid hidden" placeholder="'.$row['bid'].'" readonly>
                                            <input class="day_number hidden" placeholder="'.$row['day'].'" readonly>
                                            </div>';
                                        }
                                    }?>
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">Czw</div>
                                <div class="plan">
                                    <?php
                                    $result = blocks::getAllBlocks();
                                    while($row = mysqli_fetch_assoc($result)) {
                                        if ($_SESSION['username'] == $row['username'] and $row['day'] == 4) {
                                            echo '<div class="blocks" style="top: '.$row['starttime']/$table_height*100 .'%; height: '.($row['finishtime']-$row['starttime'])*100/$table_height.'%;">
                                            <p>cos</p>
                                            <input class="starttime hidden" placeholder="' . $row['starttime'] . '" readonly>
                                            <input class="endtime hidden" placeholder="' . $row['finishtime'] . '" readonly>
                                            <input class="blockid hidden" placeholder="'.$row['bid'].'" readonly>
                                            <input class="day_number hidden" placeholder="'.$row['day'].'" readonly>
                                            </div>';
                                        }
                                    }?>
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">Pt</div>
                                <div class="plan">
                                    <?php
                                    $result = blocks::getAllBlocks();
                                    while($row = mysqli_fetch_assoc($result)) {
                                        if ($_SESSION['username'] == $row['username'] and $row['day'] == 5) {
                                            echo '<div class="blocks" style="top: '.$row['starttime']/$table_height*100 .'%; height: '.($row['finishtime']-$row['starttime'])*100/$table_height.'%;">
                                            <p>cos</p>
                                            <input class="starttime hidden" placeholder="' . $row['starttime'] . '" readonly>
                                            <input class="endtime hidden" placeholder="' . $row['finishtime'] . '" readonly>
                                            <input class="blockid hidden" placeholder="'.$row['bid'].'" readonly>
                                            <input class="day_number hidden" placeholder="'.$row['day'].'" readonly>
                                            </div>';
                                        }
                                    }?>
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">So</div>
                                <div class="plan">
                                    <?php
                                    $result = blocks::getAllBlocks();
                                    while($row = mysqli_fetch_assoc($result)) {
                                        if ($_SESSION['username'] == $row['username'] and $row['day'] == 6) {
                                            echo '<div class="blocks" style="top: '.$row['starttime']/$table_height*100 .'%; height: '.($row['finishtime']-$row['starttime'])*100/$table_height.'%;">
                                            <p>cos</p>
                                            <input class="starttime hidden" placeholder="' . $row['starttime'] . '" readonly>
                                            <input class="endtime hidden" placeholder="' . $row['finishtime'] . '" readonly>
                                            <input class="blockid hidden" placeholder="'.$row['bid'].'" readonly>
                                            <input class="day_number hidden" placeholder="'.$row['day'].'" readonly>
                                            </div>';
                                        }
                                    }?>
                                </div>
                            </div>

                            <div class ="day">
                                <div class="name-day">Nd</div>
                                <div class="plan">
                                    <?php
                                    $result = blocks::getAllBlocks();
                                    while($row = mysqli_fetch_assoc($result)) {
                                        if ($_SESSION['username'] == $row['username'] and $row['day'] == 7) {
                                            echo '<div class="blocks" style="top: '.$row['starttime']/$table_height*100 .'%; height: '.($row['finishtime']-$row['starttime'])*100/$table_height.'%;">
                                            <p>cos</p>
                                            <input class="starttime hidden" placeholder="' . $row['starttime'] . '" readonly>
                                            <input class="endtime hidden" placeholder="' . $row['finishtime'] . '" readonly>
                                            <input class="blockid hidden" placeholder="'.$row['bid'].'" readonly>
                                            <input class="day_number hidden" placeholder="'.$row['day'].'" readonly>
                                            </div>';
                                        }
                                    }?>
                                </div>
                            </div>


