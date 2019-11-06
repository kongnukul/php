<?php
SESSION_START();
include('../layout/html-top.php');
include_once('../conn/db_conn.php');
if(isset($_SESSION['user'])){
    $delete_news = "DELETE FROM news WHERE news_id = '{$_GET['news_id']}'";
    $delete_result = $conn->query($delete_news);

    if($delete_result != FALSE){
        echo "ลบข่าวสำเร็จ!";
        header('refresh:1; ../news_all.php');
    }else{
        echo "ลบข่าวไม่สำเร็จ!" . $delete_news;
    }
}
?>