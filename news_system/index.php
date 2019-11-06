<?php SESSION_START();
if(isset($_SESSION['user'])){
header('location: dashboard.php');
}else{
include('layout/html-top.php');?>
<h4><b>ข่าวสารในระบบทั้งหมดประจำวันที่ : </b><?php echo $time = date("d-m-Y");?></h4>
<!--************* DISPLAY IN INDEX ************-->
<table class="table">
<thead>
<tr>
<th >ลำดับ</th>
<th >หัวข้อข่าว</th>
<th >ผู้โพสต์</th>
<th >วันที่โพสต์</th>
<th >ดูแล้ว</th>
<th >เปิดดู</th>
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
        echo '<td >'. $i++ .'</td>';
        echo '<td >'. $row['title'] .'</td>';
        echo '<td >'. $row['first_name'] . ' ' . $row['last_name'] .'</td>';
        echo '<td >'. $row['news_created'] .'</td>';
        echo '<td >'. $row['hit'] .'</td>';
        echo '<td ><a href="process/view_news.php?news_id='.$row['news_id'].'">เปิดดู</a></td>';
        echo '</tr>';
        }
?>
</tbody>
</table>
<?php
include('layout/html-bottom.php');
}

?>

