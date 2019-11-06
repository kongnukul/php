<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>

<?php include_once('../config.php');
$conn->set_charset('utf8');
$sql = "UPDATE students_table SET std_id='{$_GET['std_id']}',
std_password='{$_GET['std_password']}',
std_firstname='{$_GET['std_firstname']}',
std_lastname='{$_GET['std_lastname']}',
std_faculty='{$_GET['std_faculty']}',
std_branch='{$_GET['std_branch']}',
std_level='{$_GET['std_level']}',
std_email='{$_GET['std_email']}',
std_year='{$_GET['std_year']}',
account_status='{$_GET['account_status']}' 
WHERE std_id = {$_GET['ref']}";

$result = $conn->query($sql);

if($result === TRUE){
    echo '<div style="text-align:center;color:green;">';
    echo '<img src="../assets/success_png.png"></img>';
    echo "<p><h3><b>แก้ไขข้อมูลสำเร็จ</b></h3></p></div>";
    header('refresh:2; index.php');
}else{
    echo '<div style="text-align:center;color:red;">';
    echo '<img src="../assets/fail_png.png"></img>';
    echo "<p><h3><b>แก้ไขข้อมูลไม่สำเร็จ</b></h3></p></div>";
    header('refresh:2; index.php');
}
$conn->close();
?>

<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; ../index.php');
    
}

?>