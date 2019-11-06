<?php ob_start();?>
<?php session_start();?>
<?php
if(isset($_SESSION['name'])) {
?>
<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
<div style="text-align:center;">
<h1>ระบบจัดการเพิ่ม ลบ เรียกดูตารางสอบ</h1>
</div>
<hr>
<span style="color:green;"><h4>คุณกำลังจัดการข้อมูลของนิสิตรหัส : <?php echo $_GET['std_id']?></h4></span>
<div style="display:inline-block; vertical-align: middle;">

<table>
<tr>
<td style="background-color:purple;color:white;padding-left:50px;padding-right:50px;text-align:center;">
<h4>เพิ่มตารางสอบ</h4>
<form name="form1" method="post" action="upload.php?std_id=<?php echo $_GET['std_id'];?>" enctype="multipart/form-data">
            <input type="file" class="custom-file-input" name="filUpload" required>
            <input name="btnSubmit" type="submit" class="btn" value="อัพโหลด">
</form>
<div>
</td>
<td style="background-color:gold;padding-left:170px;padding-right:170px;text-align:center;">
<h4>เรียกดูตารางสอบทั้งหมด</h4>
<button class="btn" id="button">ตารางสอบทั้งหมด</button>
</div></td>
</tr>
</table>
<br>
<hr>
<div id="iframeHolder"></div>
</div>





</div>
</body>
</html>

<!-- ******************************************************* SCRIPT *************************************-->
<script type="text/javascript">
$(function(){
    $('#button').click(function(){ 
        if(!$('#iframe').length) {
                $('#iframeHolder').html('<iframe id="iframe" src="see.php?std_id=<?php echo $_GET['std_id'];?>" style="border:none;width:1024px;height:600px;"></iframe>');
        }
    });   
});
</script>

<?php
}else{
    echo "<span style='text-align:center;color:red;'><h1>กรุณาเข้าสู่ระบบ</h1></span>";
    header('refresh:2; ../../index.php');
    
}
?>