<?php
SESSION_START();
include('layout/html-top.php');
if(isset($_SESSION['user'])){
if($_SESSION['user']['user_types_id'] == "2"){?>
<!--************* SHOW ADMIN DISPLAY ************-->
<h3><b>เพิ่มข่าว</b></h3>
<form action="process/news_process.php" method="POST" enctype="multipart/form-data">
<table>
<tr>
<td>หัวข้อข่าว : </td>
<td><input type="text" size="80" name="title"></td>
</tr>
<tr>
<td>เนื้อหาข่าว : </td>
<td><textarea cols="80" rows="5" name="description"></textarea></td>
</tr>
<tr>
<td>แหล่งรูปประกอบข่าว : </td>
<td><input type="text" name="image" required> <span style="color:red">*ใช้ลิงค์รูปภาพในการแทรกรูปภาพ</span></td>
</tr>
</table>
<input type="submit" value="เพิ่มข่าว">
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