<?php include('../layout/html-top.php');?>
<h3>กำลังประมวลผล...</h3>
<?php require_once('../conn/db_conn.php');
$regis = $_POST['regis'];

//print_r($regis);

$time = date("d-m-Y H:i:s");
$sql_check = "SELECT * FROM users WHERE username='{$regis['username']}'";
$result_check = $conn->query($sql_check);
$data = $result_check->fetch_assoc();
if($data != 0){
    echo "ERROR : มี Username นี้ในระบบแล้ว!";
    header('refresh:1; ../registration.php');
}else{
    $sql_insert = "INSERT INTO users (user_types_id,first_name,last_name,username,password,created,last_login) VALUES ('1','{$regis['first_name']}','{$regis['last_name']}','{$regis['username']}','{$regis['password']}','{$time}','{$time}')";
    $result_insert = $conn->query($sql_insert);
    if($result_insert != FALSE){
        echo "สมัครสมาชิกสำเร็จ!";
        header('refresh:1; ../login.php');
    }else{
        echo "สมัครสมาชิกไม่สำเร็จ!" . $sql_insert;
        header('refresh:1; ../registration.php');
    }
}
?>
<?php include('../layout/html-bottom.php');?>