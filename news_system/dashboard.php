<?php SESSION_START(); ?>
<?php include 'conn/db_conn.php';?>
<?php include('layout/html-top.php');?>
<h3>ฟังก์ชันของสมาชิก</h3>
<?php
if($_SESSION['user']['user_types_id'] == "2"){?>
<!--ADMIN MENU-->
<a href="news_all.php">จัดการข่าวสาร</a>
<!--END of ADMIN MENU-->
<?php }else{?>
<!--USER MENU-->
    <a href="news_all.php">อ่านข่าว</a>
<!--END of USER MENU-->
<?php
}
?>
<?php include('layout/html-bottom.php');?>

<!--ถ้า ไม่มีการเข้าสู่ระบบจะไม่สามารถเข้าใน้หน้า Dashboard ได้-->
<?php if($_SESSION['user']['user_types_id'] == ""){
    echo "ไม่สามารถใช้งานได้!";
    header('location: index.php');
}?>
