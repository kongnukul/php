<?php include('layout/html-top.php');?>
<h3><b>สมัครสมาชิก</b></h3>
<form action="process/register_process.php" method="POST">
<table>

<tr>
<td>ชื่อ : </td>
<td><input type="text" name="regis[first_name]" value="" required></td>
</tr>

<tr>
<td>นามสกุล : </td>
<td><input type="text" name="regis[last_name]" value="" required></td>
</tr>

<tr>
<td>username : </td>
<td><input type="text" name="regis[username]" value="" required></td>
</tr>

<tr>
<td>Password : </td>
<td><input type="password" name="regis[password]" value="" required></td>
</tr>

</table>
<input type="submit" value="สมัครสมาชิก">
</form>
<?php include('layout/html-bottom.php');?>