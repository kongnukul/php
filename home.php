<?php ob_start();?>
<?php session_start();?>
<html>
<head>
<meta charset="utf-8">
<title>หน้าหลักระบบหลังบ้าน</title>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="container">
<?php
if(isset($_SESSION['name'])) {
?>
<br>
<span style="color:purple;background-color:yellow;padding:3px;"><i class="icon-user"></i> ยินดีต้อนรับคุณ <b><?php echo $_SESSION["name"]; ?></b></span>
<!-- ********************************************************************** -->
<div class="navbar">
    <div class="navbar-inner">
		<div class="container-fluid">
			<a id="main" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#" name="top">เมนูสำหรับผู้ดูแลระบบ</a>
			<div class="nav-collapse collapse">
				<ul class="nav">

					<li class="divider-vertical"><a href="#" onclick='document.getElementById("import").src="student_management/index.php";'><i class="icon-wrench"></i> ระบบจัดการข้อมูลนิสิต</a></li>

					<li class="divider-vertical"><a href="#" onclick='document.getElementById("import").src="news_system/index.php";'><i class="icon-bullhorn"></i> ระบบจัดการข่าวสาร</a></li>

					<!-- <li class="divider-vertical"><a href="#" onclick='document.getElementById("import").src="subject/subject.php";'><i class="icon-bullhorn"></i> ระบบจัดการรายวิชา</a></li> -->
					<li class="divider-vertical"><a href="#" onclick='document.getElementById("import").src="subject/a.php";'><i class="icon-file"></i> ระบบจัดการรายวิชา</a></li>

					<li class="divider-vertical"><a href="#" onclick='document.getElementById("import").src="study_management/class_index.php";'><i class="icon-list-alt"></i> ระบบงานตารางเรียน</a></li>

					<li class="divider-vertical"><a href="#" onclick='document.getElementById("import").src="study_management/exam_index.php";'><i class="icon-file"></i> ระบบงานตารางสอบ</a></li>

					<li class="divider-vertical"><a href="#" onclick='document.getElementById("import").src="grade_calculator/index.php";'><i class="icon-file"></i> คำนวณเกรด</a></li>
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="logout.php">
						 <i class="icon-off"></i>ออกจากระบบ</a>
				</ul>
				
			</div>
			<!--/.nav-collapse -->
		</div>
		<!--/.container-fluid -->
	</div>
	<!--/.navbar-inner -->
</div>

<iframe id='import' frameborder="0" scrolling="yes" width="100%" height="600px">
<!-- ********************************************************************** -->
<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; index.php');
    
}
?>
</div>
</body>
</html>