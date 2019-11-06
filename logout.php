<?php ob_start();?>
<?php session_start();?>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<body>
<div class="container">
<?php
if(isset($_SESSION['name'])) {
?>
<?php
unset($_SESSION["id"]);
unset($_SESSION["name"]);
echo "<span style='text-align:center;color:green;'><h1>ออกจากระบบสำเร็จ!</h1></span>";
header("refresh:2; index.php");
?>
<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; index.php');
    
}

?>
</div>
</body>