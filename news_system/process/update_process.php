<h3>กำลังประมวลผล...</h3>
<?php require_once('../conn/db_conn.php');
date_default_timezone_set("Asia/Bangkok");
$conn->set_charset('utf8');
$title = $_POST['title'];
$description = $_POST['description'];
$time = date("d-m-Y H:i:s");
$image = $_POST['image'];


    $sql_update = "UPDATE news SET title='{$title}',description='{$description}',image='{$image}',news_created='{$time}' WHERE news_id='{$_GET['news_id']}'";
    $result_update = $conn->query($sql_update);
    if($result_update != FALSE){
        echo "แก้ไขข่าวสำเร็จ!";
        header('refresh:1; ../process/view_news.php?news_id='.$_GET['news_id'].'');
    }else{
        echo "แก้ไขข่าวไม่สำเร็จ!" . $sql_update;
        header('refresh:1; ../process/view_news.php?news_id='.$_GET['news_id'].'');
    }
?>
<?php include('../layout/html-bottom.php');?>