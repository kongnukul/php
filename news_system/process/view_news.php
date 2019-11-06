<?php SESSION_START();?>
<?php 
include_once('../conn/db_conn.php');
$update_hit = "UPDATE news SET hit=hit+1 WHERE news_id='{$_GET['news_id']}'";
$result_hit = $conn->query($update_hit);
?>

<?php 
if(isset($_SESSION['user'])){?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--END of CSS-->
<title></title>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
</head>
<body>
<div class="container">
<?php require_once('../conn/db_conn.php');?>
<?php
$conn->set_charset('utf8');
$read_news = "SELECT * FROM news WHERE news_id = '{$_GET['news_id']}'";
$result = $conn->query($read_news);
$row = $result->fetch_assoc();
if($row != 0){
    echo '<div style="font-size:8vw;"><b>'.$row['title'].'</b></div><br>';
    
    echo '<img src="'.$row['image'].'" alt="ลิงค์รูปภาพไม่ถูกต้อง!" style="width:100%;"/>';


    echo '<div style="font-size:5vw;">'.$row['description'].'</div>';
    echo '| <a href="../index.php">ย้อนกลับ</a> | <br>';
}?>
<td style="background-color:red;">แสดงความคิดเห็น</td>
<form method="POST" action="news_comment_process.php?news_id=<?php echo $_GET['news_id'];?>">
<table>
<tr>
<td><textarea name="comment" rows="5" cols="80" style="width:100%;"></textarea></td>
</tr>
</table>
<input type="submit" value="แสดงความคิดเห็น">
</form>
<br>
<?php
}else{
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--END of CSS-->
<title></title>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
</style>
</head>
<body>
<div class="container">
<?php require_once('../conn/db_conn.php');?>
<?php
$conn->set_charset('utf8');
$read_news = "SELECT * FROM news WHERE news_id = '{$_GET['news_id']}'";
$result = $conn->query($read_news);
$row = $result->fetch_assoc();
if($row != 0){
    echo '<div style="font-size:8vw;"><b>'.$row['title'].'</b></div><br>';

    echo '<img src="'.$row['image'].'" alt="ลิงค์รูปภาพไม่ถูกต้อง!" style="width:100%;"/>';


    echo '<div style="font-size:5vw;">'.$row['description'].'</div>';
}?>
<?php

}
?>
<hr>
<?php include_once('../conn/db_conn.php');
$sqlx = "SELECT * FROM news_comment WHERE news_id = '{$_GET['news_id']}'";
$resultx = $conn->query($sqlx);
$x = 1;
echo '<table id="up">';
while($rowx = $resultx->fetch_assoc()){
echo '<tr>';
echo '<td>';
echo '<h5><b>ความเห็นที่ : '. $x++ .'</b></h5>' . $rowx['news_comment'] . '<hr style="border-color:black;">';
echo '</td>';
echo '</tr>';
}

echo '</table>';
?>
<div>| <a href="#up">กลับขึ้นด้านบน</a> |</div>
<br>

<?php include('../layout/html-bottom.php');?>