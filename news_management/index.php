<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
require('../config.php');
$conn->set_charset("utf8");
$sql = "SELECT * FROM news_table n LEFT JOIN user u ON u.name = n.hidden";
$result = $conn->query($sql);
?>

<!------------------- CODE HERE IF HE/SHE IS ADMIN ------------------------------>
<html>
<head>
  <title>ระบบจัดการข่าว</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<span style="text-align:center;"><h1><b>ระบบจัดการข่าวสาร (อยู่ระหว่างการพัฒนา)</b></h1></span>
<form action="" method="GET">
<input type="search" name="q" value="" placeholder="ค้นหาข่าว...">
<input type="submit" value="ค้นหา">
</form>
<table class="table table-hover">
<thead style="background-color:black;color:white;">
<tr>
<th style="text-align:center;">ลำดับ</th>
<th style="text-align:center;">หัวข้อข่าว</th>
<th style="text-align:center;">วันที่โพสต์</th>
<th style="text-align:center;">ผ้โพสต์</th>
<th style="text-align:center;">เปิดอ่านแล้ว</th>
<th style="text-align:center;">เปิดดู</th>
<th style="text-align:center;">แก้ไข</th>
<th style="text-align:center;">ลบ</th>
</tr>
</thead>
<tbody style="text-align:center;">
<?php 
if(isset($_GET['q'])){
  $sql = "SELECT * FROM news_table WHERE news_id LIKE '%{$_GET['q']}%'";
  
}else{
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
?>
<tr>
<td scope="col"><?php echo $row['news_id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['created_at']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['hit']; ?></td>
<td><a href="news_view.php?news_id=<?php echo $row['news_id']; ?>">เปิดดู</a></td>
<td><a href="news_edit.php">แก้ไข</a></td>
<td><a href="news_del.php">ลบ</a></td>
</tr>
<?php
    }
}else{
}
}
?>

</tbody>
</table>
</div>
</body>
</html>
<!--***********************************END OF ADMIN*************************************-->


<?php
}else{
/*<!------------------- CODE HERE IF HE/SHE IS ADMIN ------------------------------>*/

/*<!--*******************************END OF USER***********************************-->*/
}
?>