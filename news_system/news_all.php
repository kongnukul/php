<?php
SESSION_START();
if(isset($_SESSION['user'])){
if($_SESSION['user']['user_types_id'] == "2"){
include('layout/html-top.php');?>
<!--************* SHOW ADMIN NEWS ************-->
<h3><b>จัดการข่าวสารในระบบ</b></h3>
<!--************* END of SHOW ADMIN NEWS ************-->
<a href="news_add.php">เพิ่มข่าว</a>
<table class="table">
<thead>
<tr>
<th style="text-align:center;">ลำดับ</th>
<th style="text-align:center;">หัวข้อข่าว</th>
<th style="text-align:center;">ผู้โพสต์</th>
<th style="text-align:center;">วันที่โพสต์</th>
<th style="text-align:center;">ดูแล้ว</th>
<th style="text-align:center;">เปิดดู</th>
<th style="text-align:center;">แก้ไข</th>
<th style="text-align:center;">ลบ</th>
</tr>
</thead>
<!-- LOOP นำข่าวมาแสดง -->
<tbody>
<?php
include('conn/db_conn.php');
$conn->set_charset('utf8');
$news_query = "SELECT * FROM news n LEFT JOIN users u ON u.id = n.users_id";
$result_news = $conn->query($news_query);
$i=1;
    while($row = $result_news->fetch_assoc()){
        echo '<tr>';
        echo '<td style="text-align:center;">'. $i++ .'</td>';
        echo '<td >'. $row['title'] .'</td>';
        echo '<td style="text-align:center;">'. $row['first_name'] . ' ' . $row['last_name'] .'</td>';
        echo '<td style="text-align:center;">'. $row['news_created'] .'</td>';
        echo '<td style="text-align:center;">'. $row['hit'] .'</td>';
        echo '<td style="text-align:center;"><a href="process/view_news.php?news_id='.$row['news_id'].'">เปิดดู</a></td>';
        echo '<td style="text-align:center;"><a href="process/delete_news.php?news_id='.$row['news_id'].'">ลบข่าวนี้</a></td>';
        echo '<td style="text-align:center;"><a href="edit_news.php?news_id='.$row['news_id'].'">แก้ไขข่าวนี้</a></td>';
        echo '</tr>';
        }
?>
</tbody>
</table>
<?php }elseif($_SESSION['user']['user_types_id'] == "1"){ 
include('layout/html-top.php');?>
<!--************* SHOW USER NEWS ************-->
<h3><b>ข่าวสารทั้งหมด</b></h3>
<table class="table">
<thead>
<tr>
<th style="text-align:center;">ลำดับ</th>
<th style="text-align:center;">หัวข้อข่าว</th>

</tr>
</thead>
<!-- LOOP นำข่าวมาแสดง -->
<tbody>
<?php
include('conn/db_conn.php');
$conn->set_charset('utf8');
$news_query = "SELECT * FROM news n LEFT JOIN users u ON u.id = n.users_id";
$result_news = $conn->query($news_query);
$i=1;
    while($row = $result_news->fetch_assoc()){
        echo '<tr>';
        echo '<td style="text-align:center;">'. $i++ .'</td>';
        echo '<td ><a href="process/view_news.php?news_id='.$row['news_id'].'">'. $row['title'] .'</a></td>';

        echo '</tr>';
        }
?>
</tbody>
</table>
<!--************* END of SHOW USER NEWS ************-->

<?php
}
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
</head>
<body>
<div class="container">
    <!--************* SHOW USER NEWS ************-->
<h3><b>ข่าวสารทั้งหมด</b></h3>
<table class="table">
<thead>
<tr>
<th style="text-align:center;">ลำดับ</th>
<th style="text-align:center;">หัวข้อข่าว</th>
<th style="text-align:center;">ผู้โพสต์</th>
<th style="text-align:center;">วันที่โพสต์/แก้ไขล่าสุด</th>
<th style="text-align:center;">ดูแล้ว</th>
<th style="text-align:center;">เปิดดู</th>
</tr>
</thead>
<!-- LOOP นำข่าวมาแสดง -->
<tbody>
<?php
include('conn/db_conn.php');
$conn->set_charset('utf8');
$news_query = "SELECT * FROM news n LEFT JOIN users u ON u.id = n.users_id";
$result_news = $conn->query($news_query);
$i=1;
    while($row = $result_news->fetch_assoc()){
        echo '<tr>';
        echo '<td style="text-align:center;">'. $i++ .'</td>';
        echo '<td >'. $row['title'] .'</td>';
        echo '<td style="text-align:center;">'. $row['first_name'] . ' ' . $row['last_name'] .'</td>';
        echo '<td style="text-align:center;">'. $row['news_created'] .'</td>';
        echo '<td style="text-align:center;">'. $row['hit'] .'</td>';
        echo '<td ><a href="process/view_news.php?news_id='.$row['news_id'].'">เปิดดู</a></td>';
        echo '</tr>';
        }
?>
</tbody>
</table>
<?php
}
?>