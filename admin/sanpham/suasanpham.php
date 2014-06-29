<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require_once '../../connect.php';
if (isset ($_GET['idSP']))
$idSP=$_GET['idSP'];

$sll="select * from sanpham where idSP='$idSP'";
$qrl=mysql_query($sll);
if ($rowl=mysql_fetch_array($qrl))
{
?>
<form id="form1" name="form1" method="post" action="http://localhost/thoi-trang-tre/admin/sanpham/xuly_sua.php">
  <table width="500" border="1" cellspacing="1" cellpadding="1" align="center">
	<tr>
      <td>Tên Sản Phẩm:</td>
      <td><input name="tensanpham" type="text" id="tensanpham" size="30" value="<?php echo $rowl['TenSP']; ?>" /></td>
    </tr>
    <tr>
      <td>Mô tả:</td>
      <td><input name="Mota" type="text" id="Mota" size="30" value="<?php echo $rowl['MoTa']; ?>" /></td>
    </tr>
    <tr>
      <td>Ẩn hiện:</td>
      <td><select name="anhien" id="anhien">
      <option value="0" <?php if ($rowl['AnHien']==0) echo "selected='selected'"; ?>>Ẩn</option>
      <option value="1" <?php if ($rowl['AnHien']==1) echo "selected='selected'"; ?>>Hiện</option>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="sua" id="sua" value="Sửa" /></td>
      <td><input type="reset" name="huy" id="huy" value="Hủy" /></td>
    </tr>
  </table>
  <input type="hidden" id="idSP" name="idSP" value="<?php echo $rowl['idSP']; ?>" />
</form>
<?php
}
?>
</body>
</html>