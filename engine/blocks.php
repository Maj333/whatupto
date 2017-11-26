<?php
/**
 * Created by PhpStorm.
 * User: gtluszcz
 * Date: 25.11.2017
 * Time: 23:04
 */

Class Blocks{

    static public function getAllBlocks(){
        $query="SELECT combinetub.id, username,starttime,finishtime,day,tag_name,bid
                FROM combinetub
                
                  LEFT JOIN
                  (
                  SELECT combineub.id, users.username, blocks.starttime, blocks.finishtime, blocks.day, blocks.id as bid
                  FROM combineub
                    LEFT JOIN users
                      ON combineub.user_id = users.id
                    LEFT JOIN blocks
                      ON combineub.block_id = blocks.id
                  ) blocks_users
                  ON combinetub.combineUB_id = blocks_users.id
                
                  LEFT JOIN tags
                    ON combinetub.tags_id=tags.id";

        $result=mysqli_query(connect::$connection,$query)or die("Błąd przy wyświetlaniu bloków");
//        $column = array();
//        while($row = mysqli_fetch_assoc($result)){
//            $column2=array();
//            array_push($column2,$row['id']);
//            array_push($column2,$row['username']);
//            array_push($column2,$row['starttime']);
//            array_push($column2,$row['finishtime']);
//            array_push($column2,$row['day']);
//            array_push($column2,$row['tag_name']);
//            array_push($column2,$row['bid']);
//
//            array_push($column,$column2);
//
//        };

        return $result;
    }

    static public function getTags($id){
        $query="SELECT day,tag_name,bid
FROM combinetub

  LEFT JOIN
  (
    SELECT combineub.id, blocks.day, blocks.id as bid
    FROM combineub
      LEFT JOIN blocks
        ON combineub.block_id = blocks.id
  ) blocks_users
    ON combinetub.combineUB_id = blocks_users.id

  LEFT JOIN tags
    ON combinetub.tags_id=tags.id
    WHERE bid = '$id'";

        $result=mysqli_query(connect::$connection,$query)or die("Błąd przy wyświetlaniu bloków");
//        $column = array();
//        while($row = mysqli_fetch_assoc($result)){
//            $column2=array();
//            array_push($column2,$row['id']);
//            array_push($column2,$row['username']);
//            array_push($column2,$row['starttime']);
//            array_push($column2,$row['finishtime']);
//            array_push($column2,$row['day']);
//            array_push($column2,$row['tag_name']);
//            array_push($column2,$row['bid']);
//
//            array_push($column,$column2);
//
//        };

        return $result;
    }
}