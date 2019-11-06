<?php
SESSION_START();
include('../layout/html-top.php');
require('../conn/db_conn.php');
date_default_timezone_set("Asia/Bangkok");
$conn->set_charset('utf8');
$title = $_POST['title'];
$description = $_POST['description'];
$time = date("Y-m-d H:i:s");

$image = $_POST['image'];




if(isset($_SESSION['user'])){
/* ********************************************** */

/* ********************************************** */

        $news_insert = "INSERT INTO news (users_id,title,description,image,news_created) VALUES ('{$_SESSION['user']['id']}','{$title}','{$description}','{$image}','{$time}')";


        $result_insert = $conn->query($news_insert);
        if($result_insert != FALSE){
            echo "เพิ่มข่าวสำเร็จ!";
            //header('refresh:1; ../news_all.php');
        }else{
            echo "เพิ่มข่าวไม่สำเร็จ!" . $news_insert;
            //header('refresh:1; ../news_all.php');
            
        }
}
?>