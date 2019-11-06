<?php ob_start();?>
<?php session_start();?>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
if(count($_POST) > 0) {
 include('config.php');
$username = addslashes(trim($_POST['username']));
$password= addslashes(trim($_POST['password']));

$conn->set_charset("utf8");
$sql = "SELECT * FROM user WHERE username='$username' and password = '$password'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['name'];
    }
}else{
echo "<h1><span style='color:red;'>ชื่อผู้ใช้ (Username) หรือ รหัสผ่าน (Password) ผิด! โปรดลองใหม่อีกครั้ง...</span></h1>";
header('refresh:2; index.php');
}
}


if(isset($_SESSION["id"])) {
    echo "<span style='text-align:center;color:green;'><h1>เข้าสู่ระบบสำเร็จ!</h1></span>";
header('refresh:2; home.php');
}
?>
</body>