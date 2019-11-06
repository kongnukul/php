<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "news_db";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->error){
    echo "เชื่อมต่อฐานข้อมูลไม่สำเร็จ!";
}
?>