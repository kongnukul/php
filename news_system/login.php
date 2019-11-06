<?php include('layout/html-top.php');?>
<h3><b>เข้าสู่ระบบ</b></h3>
<form action="process/login_process.php" method="POST">
<table>

<tr>
<td>username : </td>
<td><input type="text" name="login[username]" value="" required></td>
</tr>

<tr>
<td>Password : </td>
<td><input type="password" name="login[password]" value="" required></td>
</tr>

</table>
<input type="submit" value="เข้าสู่ระบบ">
</form>
<?php include('layout/html-bottom.php');?>