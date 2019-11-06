<!--****************************LOGIN***************************-->
<?php
if(isset($_SESSION['user'])){
if($_SESSION['user']['user_types_id'] == '2'){?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--END of CSS-->
<title></title>
</head>
<body>
<div class="container">
<h3><b>ยินดีต้อนรับคุณ : <?php echo $_SESSION['user']['first_name'];?></b></h3>
<div>| <a href="logout.php">ออกจากระบบ</a> |</div>
<hr>
<!--**********************************************************************-->
<?php
}elseif($_SESSION['user']['user_types_id'] == '1'){
?>
<!--**********************************************************************-->
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--CSS-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--END of CSS-->
<title></title>
</head>
<body>
<div class="container">
<h3><b>ยินดีต้อนรับคุณ : <?php echo $_SESSION['user']['first_name'];?></b></h3>
<div>| <a href="logout.php">ออกจากระบบ</a> |</div>
<hr>
<?php
    }
}else{?>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--END of CSS-->
    <title></title>
    </head>
    <body>
    <div class="container">
    <h1><b>ยินดีต้อนรับเข้าสู่ระบบแจ้งข่าวสาร</b></h1>
    <div>| <a href="index.php">หน้าแรก</a> | <a href="registration.php">สมัครสมาชิก</a> | <a href="login.php">เข้าสู่ระบบ</a> |</div>
    <hr>
    <?php 
}
?>
