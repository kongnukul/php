<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<div class="container">
<?php 
$std_id = $_GET['std_id'];
?>

<h2>ข้อมูลตารางเรียน</h2>
<?php
$fileList = glob("class_info/$std_id/*");
foreach($fileList as $filename){
    echo "<ul>";
    echo "<li><h4><a href='$filename'>$filename</a></h4><a href=\"deletepage.php?std_id=$std_id&file=$filename\">ลบไฟล์ : ".$filename."</a></li><br><h3></h3>";
    echo "</ul>";
    }

?>
Reading Data of Student ID = <?php echo $std_id;?>
</div>
</body>

<!--- *******************USER VIEW********************* --->
<?php
}else{
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<div class="container">
<?php 
$std_id = $_GET['std_id'];
?>

<h2>ข้อมูลตารางเรียน</h2>
<?php
$fileList = glob("class_info/$std_id/*");
foreach($fileList as $filename){
    echo "<ul>";
    echo "<li><h4><a href='$filename'>$filename</a></h4></li><br><h3></h3>";
    echo "</ul>";
    }

?>
Reading Data of Student ID = <?php echo $std_id;?>
</div>
</body>
<?php
}
?>


