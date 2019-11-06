<?php 
$std_id = $_GET['std_id'];
?>

<?php
$filename = $_GET['file']; //get the filename
unlink("$filename");
echo '<h1><span style="color:green;">ลบไฟล์ : '.$filename.' สำเร็จ!</span></h1>';
header('refresh:1; see.php?std_id='.$std_id.'');

?>