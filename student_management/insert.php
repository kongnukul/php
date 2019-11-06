<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>
<!-- *********** INSERT ************ -->
<?php include_once('../config.php');
$conn->set_charset('utf8');
if(isset($_GET['std_id'])){
    $sql = "SELECT * FROM students_table WHERE std_id = '{$_GET['std_id']}'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        echo "พบรหัสนิสิตซ้ำในระบบ!";
        header('refresh:2; registration_student.php');
    }else{

$sql = "INSERT INTO students_table (std_id,std_password,std_firstname,std_lastname,std_faculty,std_branch,std_level,std_email,std_year,account_status) VALUES ('{$_GET['std_id']}','{$_GET['std_password']}','{$_GET['std_firstname']}','{$_GET['std_lastname']}','{$_GET['std_faculty']}','{$_GET['std_branch']}','{$_GET['std_level']}','{$_GET['std_email']}','{$_GET['std_year']}','{$_GET['account_status']}')";

$result = $conn->query($sql);
}
if($result === TRUE){
    echo '<div style="text-align:center;color:green;">';
    echo '<img src="../assets/success_png.png"></img>';
    echo "<p><h3><b>บันทึกข้อมูลสำเร็จ</b></h3></p></div>";
    header('refresh:2; index.php');
}else{
    echo '<div style="text-align:center;color:red;">';
    echo '<img src="../assets/fail_png.png"></img>';
    echo "<p><h3><b>บันทึกข้อมูลไม่สำเร็จ</b></h3></p></div>";
    header('refresh:2; index.php');
}
}
?>

<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; ../index.php');
    
}

?>