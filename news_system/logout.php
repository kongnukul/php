<?php SESSION_START(); ?>
<?php include('layout/html-top.php');?>
<h3>กำลังออกจากระบบ...</h3>
<?php
unset($_SESSION['user']);
header('refresh:1; index.php');
?>
<?php include('layout/html-bottom.php');?>