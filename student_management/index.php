<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
table,th,tr,td{
    text-align: center;
}


/* RESPONSIVE SCREEN */

/* ***************** */
</style>
</head>
<body>
<div class="container" style="width:100%;">

<h1><b>ระบบจัดการข้อมูลนิสิต (เพิ่ม ลบ แก้ไข เรียกดู)</b></h1>
<div>
<a href="registration_student.php"><button type="button" class="btn btn-primary">เพิ่มนิสิต</button></a>
</div><br>
<!-- SEARCHING -->
<form action="" method="GET">
<input type="search" name="q" value="">
<input type="submit" value="ค้นหา"><span style="color:red">*ค้นหาจากรหัสนิสิต</span>
</form>
<!--END of SEARCHING-->
<table class="table table-striped">
<thead>
<tr>
<th scope="col">#ลำดับ</th>
<th scope="col">รหัสนิสิต</th>
<th scope="col">รหัสผ่าน</th>
<th scope="col">ชื่อ</th>
<th scope="col">นามสกุล</th>
<th scope="col">ชื่อคณะ</th>
<th scope="col">ชื่อสาขา</th>
<th scope="col">ระดับ</th>
<th scope="col">อีเมล์</th>
<th scope="col">ชั้นปี</th>
<th scope="col">สถานะบัญชี</th>
<th scope="col">แก้ไข</th>
<th scope="col">ลบ</th>
</tr>
</thead>
<tbody>
<?php include_once('../config.php');
/* ******วนลูปปแสดงนิสิต******* */
$conn->set_charset('utf8');
if(isset($_GET['q'])){
    $sql = "SELECT * FROM students_table WHERE std_id LIKE '%{$_GET['q']}%'";
    $result = $conn->query($sql);
}else{
$sql = "SELECT * FROM students_table ORDER BY std_ref_id";
$result = $conn->query($sql);
}
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td>' . $row['std_ref_id'] . '</td>';
        echo '<td>' . $row['std_id'] . '</td>';
        echo '<td>' . $row['std_password'] . '</td>';
        echo '<td>' . $row['std_firstname'] . '</td>';
        echo '<td>' . $row['std_lastname'] . '</td>';
        echo '<td>' . $row['std_faculty'] . '</td>';
        echo '<td>' . $row['std_branch'] . '</td>';
        echo '<td>' . $row['std_level'] . '</td>';
        echo '<td>' . $row['std_email'] . '</td>';
        echo '<td>' . $row['std_year'] . '</td>';
        echo '<td>' . $row['account_status'] . '</td>';
        echo '<td><a href="edit_student.php?std_id=' . $row['std_id'] . '">แก้ไข</a></td>';
        echo '<td><a href="delete.php?std_id='.$row['std_id'].'">ลบ</a></td>';
    }
}else{
    echo "<h4><span style=\"color:red;\">ไม่พบข้อมูลนิสิตในฐานข้อมูล</span></h4>";
}
    echo '</tr>';
/* ************************** */


?>

</tbody>
</table>

</div>
</body>


<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; ../index.php');
    
}

?>