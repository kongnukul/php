<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>

<?php
$std_id = $_GET['std_id'];
$fileList = glob("exam_info/$std_id/*");
if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"exam_info/$std_id/".$_FILES["filUpload"]["name"]))
{

    echo '<div style="text-align:center;color:green;">';
    echo '<img src="../../assets/success_png.png"></img>';
    echo "<p><h3><b>อัพโหลดสำเร็จ</b></h3></p></div>";
    header("refresh:1; manage.php?std_id=$std_id");
}else{
    echo '<div style="text-align:center;color:red;">';
    echo '<img src="../../assets/fail_png.png"></img>';
    echo "<p><h3><b>อัพโหลดไม่สำเร็จ *ขนาดไฟล์ใหญ่เกิน 1 MB</b></h3></p></div>";
    header("refresh:2; manage.php?std_id=$std_id");
}
?>

<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; ../../index.php');
    
}
?>