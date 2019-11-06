<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>

<?php include_once('../config.php');
$sql = "DELETE FROM students_table WHERE std_id = '{$_GET['std_id']}'";

$result = $conn->query($sql);

if($result === TRUE){
    echo '<div style="text-align:center;color:green;">';
    echo '<img src="../assets/success_png.png"></img>';
    echo "<p><h3><b>ลบข้อมูลสำเร็จ</b></h3></p></div>";
    header('refresh:2; index.php');
}else{
    echo '<div style="text-align:center;color:red;">';
    echo '<img src="../assets/fail_png.png"></img>';
    echo "<p><h3><b>ลบข้อมูลไม่สำเร็จ</b></h3></p></div>";
    header('refresh:2; index.php');
}
?>


<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; ../index.php');
    
}

?>