<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<form action="class/index_class.php" method="GET">
<h1><b>กรอกรหัสนิสิตที่ต้องการจัดการข้อมูลตารางเรียน</b></h1>
<hr>
<div class="form-group">
<input type="number" style="width:100%;" class="form-control" name="std_id" value="" placeholder="กรุณากรอกรหัสนิสิต.." autofocus required>
</div>
<input type="submit" class="btn btn-primary btn-lg btn-block" value="ตกลง">
</form>
<h4><b><span style="color:red;">*กรุณากรอกให้ถูกต้องและครบถ้วน</span></b></h4>
</div>
</body>
</html>

<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; ../index.php');
    
}
?>