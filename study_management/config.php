<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>

<?php
	$hostname='localhost';
	$user = 'root';
	$password = '';
    $db = 'ag_db';
    
    $conn = new mysqli($hostname, $user, $password,$db);

?>

<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; index.php');
    
}
?>