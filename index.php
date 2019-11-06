<?php ob_start();?>
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta chaset="utf-8">
<link rel="stylesheet" href="bootstrap.min.css">

</head>
<style>
body,html {
    background-image: url('background.jpg');
    height: 100%;
}

#profile-img {
    height:180px;
}
.h-80 {
    padding-top: 30px;
    height: 80% !important;
    width: 30%;
}
</style>
<body>
<form action="check.php" method="post" class="form-signin">
<div class="container h-80">
<div class="row align-items-center h-100">
    <div class="col-3 mx-auto">
        <div class="text-center">
            <img id="profile-img" class="rounded-circle profile-img-card" src="avatar.png" />
            <p id="profile-name" class="profile-name-card"></p>
                
            
                <input type="text" name="username" id="inputUsername" class="form-control form-group" placeholder="ระบุชื่อผู้ใช้ (Username)" required autofocus>
                <input type="password" name="password" id="inputPassword" class="form-control form-group" placeholder="ระบุรหัสผ่าน (Password)" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">เข้าสู่ระบบ</button>
        </div>
    </div>
</div>
<div style="color:Gold;text-align:center;"><h3>Backyard system</h3></div>
</div>
</form>
</body>
</html
<?php
if(isset($_SESSION["id"])) {
header('location: home.php');
}
?>