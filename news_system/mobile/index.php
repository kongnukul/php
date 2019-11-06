<?php SESSION_START();?>

<?php
if(isset($_SESSION['user'])){?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
.mySlides {display:none;}

a{
  text-decoration: none;
}
</style>
<body>
<div class="w3-content w3-display-container">

<a href="http://localhost/news_system/process/view_news.php?news_id=36">
<div class="w3-display-container mySlides">
  <img src="https://ads.pantip.com/ads/imagesBanner/20430.jpg" style="width:100%">
  <div style="background-color:purple;color:white;">
    คนที่มีหนี้บัตรเครดิตเยอะจนนับว่าเป็นทุกข์ทางใจ หนี้บัตรของคุณนั้นเกิดจากความจำเป็นหรือเป็น
  </div>
</div>
</a>


<a href="http://localhost/news_system/process/view_news.php?news_id=36">
<div class="w3-display-container mySlides">
  <img src="https://ads.pantip.com/ads/imagesBanner/20430.jpg" style="width:100%">
  <div style="background-color:purple;color:white;">
    หน้าสอง
  </div>
</div>
</a>


<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<iframe src="http://localhost/news_system/index.php" style="width:100%;height:600px;border:none;"></iframe>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";
}
</script>


</body>
</html>
<?php }else{?>
<body>
  <div class="container">
  <h3><b>เข้าสู่ระบบ</b></h3>
  <form action="../process/login_process.php" method="POST">
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
<?php
}
?>