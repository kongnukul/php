<?php SESSION_START(); ?>
<?php require_once('../conn/db_conn.php')?>
<?php include('../layout/html-top.php');?>
<h3>กำลังประมวลผล...</h3>
<?php require_once('../conn/db_conn.php');
$login = $_POST['login'];
$conn->set_charset('utf8');
$sql_check = "SELECT * FROM users WHERE username='{$login['username']}' AND password='{$login['password']}'";
$result_check = $conn->query($sql_check);
$data = $result_check->fetch_assoc();
if($data != 0){
    echo "ยินดีต้อนรับคุณ : " . $data['first_name'] . " " . $data['last_name'];
    $_SESSION['user'] = $data;
    header('refresh:1; ../dashboard.php');
}else{
    echo "Username หรือ Password ผิดพลาด!";
    header('refresh:1; ../login.php');
}