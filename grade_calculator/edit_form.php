<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<form action="phpMySQLEditRecordSave.php?CusID=<?php echo $_GET["std_id"];?>" name="frmEdit" method="post">
<?php
$objConnect = mysql_connect("localhost","root","") or die("Error Connect to Database");
$objDB = mysql_select_db("ag_db");
$strSQL = "SELECT * FROM std_id WHERE std_id = '".$_GET["std_id"]."' ";
// $strSQL = "SELECT * FROM std_id WHERE std_id =  ";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{
	echo "Not found Students_ID=".$_GET["std_id"];
}
else
{
?>
<table width="300" border="1">
  <tr>
    <th width="91"> <div align="center">รหัสนิสิต </div></th>
    <th width="150"> <div align="center">ชื่อ-นามสกุล </div></th>
  </tr>

  <table width="900" border="1">
  <tr>
    <th width="100"> <div align="center">รหัสนิสิต </div></th>
    <th width="100"> <div align="center">ชื่อ-นามสกุล </div></th>
    <th width="100"> <div align="center">ชื่อ-นามสกุล </div></th>
    <th width="100"> <div align="center">ชื่อ-นามสกุล </div></th>
  </tr>
  
  <tr>
    <td><div align="center"><input type="text" name="txtCustomerID" size="5" value="<?php echo $objResult["CustomerID"];?>"></div></td>
    <td><input type="text" name="txtName" size="20" value="<?php echo $objResult["Name"];?>"></td>
    <td><input type="text" name="txtEmail" size="20" value="<?php echo $objResult["Email"];?>"></td>
    <td><div align="center"><input type="text" name="txtCountryCode" size="2" value="<?php echo $objResult["CountryCode"];?>"></div></td>
    <td align="right"><input type="text" name="txtBudget" size="5" value="<?php echo $objResult["Budget"];?>"></td>
    <td align="right"><input type="text" name="txtUsed" size="5" value="<?php echo $objResult["Used"];?>"></td>
  </tr>
  </table>
  <input type="submit" name="submit" value="submit">
  <?php
  }
  mysql_close($objConnect);
  ?>
  </form>
</body>
</html>