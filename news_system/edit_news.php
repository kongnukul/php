<?php
SESSION_START();
include('layout/html-top.php');
if(isset($_SESSION['user'])){
if($_SESSION['user']['user_types_id'] == "2"){?>
<!--************* SHOW ADMIN DISPLAY ************-->
<h3><b>แก้ไขข่าว</b></h3>
<form action="process/update_process.php?news_id=<?php echo $_GET['news_id']?>" method="POST" enctype="multipart/form-data">
<table>
<tr>
<td>หัวข้อข่าว : </td>
<?php 
include_once('conn/db_conn.php');
$conn->set_charset('utf8');
$sql = "SELECT * FROM news WHERE news_id = '{$_GET['news_id']}'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo '<td><input type="text" size="77" name="title" value="'.$row['title'].'"></td>';
echo '</tr>';
echo '<tr>';
echo '<td>เนื้อหาข่าว : </td>';
echo '<td><textarea cols="80" rows="15" name="description">'.$row['description'].'</textarea></td>';
echo '</tr>';
echo '<tr>';
echo '<td>แหล่งรูปประกอบข่าว : </td>';
echo '<td><input type="text" size="77" name="image" value="'.$row['image'].'"></td>';
echo '</tr>';
?>
</table>
<input type="submit" value="แก้ไขข่าว">
</form>
| <a href="dashboard.php">ยกเลิก</a> |
<!--************* END of SHOW ADMIN DISPLAY ************-->



<?php }elseif($_SESSION['user']['user_types_id'] == "1"){
/************** SHOW USER DISPLAY *************/
echo "คุณไม่มีสิทธิ์ใช้งานฟังก์ชันนี้!";
    header('refresh:1; index.php');
/************** END of SHOW USER DISPLAY *************/
?>
<?php
}
}else{
    echo "กรุณาเข้าสู่ระบบ!";
    header('refresh:1; index.php');
}
?>