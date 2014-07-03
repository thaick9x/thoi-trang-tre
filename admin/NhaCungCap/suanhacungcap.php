<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Sửa Nhà Cung Cấp</b></p>
<?php
if (isset($_GET['idNCC']))
{
	$idNCC=$_GET['idNCC'];
}
require_once '../../connect.php';
$sl="select * from nhacungcap where idNCC=".$idNCC."";
$qr=mysql_query($sl);
$row=mysql_fetch_array($qr);
?>
<form id="form1" name="form1" method="post" action="xuly_sua.php">
<input type="hidden" name="idNCC" id="idNCC" value="<?php echo $row['idNCC']; ?>" />
  <table width="500" border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td width="200">Tên nhà cung cấp:</td>
      <td><input name="tennhacungcap" type="text" id="tennhacungcap" size="30" value="<?php echo $row['TenNCC']; ?>"/></td>
    </tr>
    <tr>
    	<td width="300">Địa Chỉ:</td>
        <td><input name="diachinhacungcap" type="text" id="diachinhacungcap" size="30" value="<?php echo $row['DiaChi'];?>"/></td>
     </tr>
     <tr>
     	<td width="40">Thông tin:</td>
        <td><input name="thongtinnhacungcap" type="text" id="thongtinnhacungcap" size="30" value="<?php echo $row['ThongTin'];?>"/></td>
     </tr>
    <tr>
      <td>Ẩn hiện:</td>
      <td><select name="anhien" id="anhien">
      <option value="0" <?php if ($row['AnHien']==0) echo "selected='selected'"; ?>>Ẩn</option>
      <option value="1" <?php if ($row['AnHien']==1) echo "selected='selected'"; ?>>Hiện</option>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="sua" id="sua" value="Sửa" /></td>

      <td><button onclick="goBack()">Hủy</button></td>

    </tr>
  </table>
</form>
</body>
</html>