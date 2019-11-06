<?php SESSION_START();?>
<?php 
include_once('../conn/db_conn.php');
$conn->set_charset('utf8');
$comment = $_POST['comment'];
$time = date("Y-m-d H:i:s");

$sql = "INSERT INTO news_comment (news_id,users_id,news_comment,news_commend_created) VALUES ('{$_GET['news_id']}','{$_SESSION['user']['id']}','{$comment}','{$time}')";

$result = $conn->query($sql);

if($result != FALSE){
    echo "แสดงความคิดเห็นสำเร็จ!";
    header('refresh:1; view_news.php?news_id='.$_GET['news_id'].'');
}else{
    echo "แสดงความคิดเห็นไม่สำเร็จ!" . $sql;
}
?>