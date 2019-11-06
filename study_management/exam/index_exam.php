<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>

<?php
$std_id = $_GET['std_id'];


if (is_dir("exam_info/$std_id")) {
  echo "Ready";
  header("refresh:1; manage.php?std_id=$std_id");
}else{
$flgCreate = mkdir("exam_info/$std_id");
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