<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>

<?php
$std_id = $_GET['std_id'];


if (is_dir("class_info/$std_id")) {
  echo "Ready";
  header("refresh:1; manage.php?std_id=$std_id");
}else{
$flgCreate = mkdir("class_info/$std_id");
if($flgCreate)
{
  echo "Loading..";
  header("refresh:1; manage.php?std_id=$std_id");
}
else
{
	echo "Can not load!";
}
}

?>

<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; ../../index.php');
    
}
?>
</body>
</html>