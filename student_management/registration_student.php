<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container" style="width:40%;">
<form action="insert.php" method="GET">
<fieldset>
<legend><h1>ลงทะเบียนนิสิตใหม่</h1></legend>
<div class="form-group">
  <label for="std_id">รหัสนิสิต:</label>
  <input type="text" class="form-control" name="std_id" id="std_id" required>
</div>

<div class="form-group">
  <label for="std_password">รหัสผ่าน:</label>
  <input type="text" class="form-control" name="std_password" id="std_password" required>
</div>

<div class="form-group">
  <label for="std_firstname">ชื่อ:</label>
  <input type="text" class="form-control" name="std_firstname" id="std_firstname" required>
</div>

<div class="form-group">
  <label for="std_lastname">นามสกุล:</label>
  <input type="text" class="form-control" name="std_lastname" id="std_lastname" required>
</div>

<div class="form-group">
<label for="std_faculty">เลือกคณะที่นิสิตสังกัด:</label>
      <select class="form-control" id="std_faculty" name="std_faculty">
        <option value="คณะเทคโนโลยีสารสนเทศและการสื่อสาร">คณะเทคโนโลยีสารสนเทศและการสื่อสาร</option>
        <option value="คณะศิลปศาสตร์">คณะศิลปศาสตร์</option>
      </select>
</div>


<div class="form-group">
<label for="std_branch">เลือกสาขาวิชาที่นิสิตสังกัด:</label>
      <select class="form-control" id="std_branch" name="std_branch">
      <optgroup label="คณะเทคโนโลยีสารสนเทศและการสื่อสาร">
      <option value="สาขาวิชาเทคโนโลยีสารสนเทศ">สาขาวิชาเทคโนโลยีสารสนเทศ</option>
      <option value="สาขาวิชาวิทยาการคอมพิวเตอร์">สาขาวิชาวิทยาการคอมพิวเตอร์</option>
      <option value="สาขาวิชาวิศวกรรมคอมพิวเตอร์">สาขาวิชาวิศวกรรมคอมพิวเตอร์</option>
      </optgroup>
      <optgroup label="คณะศิลปศาสตร์">
      <option value="สาขาวิชาสาขาวิชาภาษาอังกฤษ">สาขาวิชาภาษาอังกฤษ</option>
      <option value="สาขาวิชาสาขาวิชาภาษาฝรั่งเศส">สาขาวิชาภาษาฝรั่งเศส</option>
      <option value="สาขาวิชาสาขาวิชาภาษาจีน">สาขาวิชาภาษาจีน</option>
      </optgroup>
      </select>
</div>


<div class="form-group">
<label for="std_level">เลือกระดับการศึกษา:</label>
      <select class="form-control" id="std_level" name="std_level">
        <option value="ป.ตรี">ป.ตรี</option>
        <option value="ป.โท">ป.โท</option>
        <option value="ป.เอก">ป.เอก</option>
      </select>
</div>


<div class="form-group">
  <label for="std_email">อีเมล์:</label>
  <input type="email" class="form-control" name="std_email" id="std_email" valid required>
</div>


<div class="form-group">
  <label for="std_year">ชั้นปี:</label>
  <input type="number" class="form-control" name="std_year" id="std_year" required>
</div>


<label for="account_status">เลือกสถานะบัญชี:</label>
      <select class="form-control" id="account_status" name="account_status">
        <option value="Normal">ปกติ (Normal)</option>
        <option value="Banned">ระงับการใช้งาน (Banned)</option>
      </select>
<hr>
<input type="submit" name="submit" class="btn btn-success btn-lg btn-block" value="บันทึก">
</fieldset>
</form>
<a href="../home.php" target="_top"><button class="btn btn-danger btn-lg btn-block">ยกเลิก</button></a><br>
</div>
</body>

<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; ../index.php');
    
}
?>