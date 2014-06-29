<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Sửa Chủng Loại Sản Phẩm</b></p>
<?php
if (isset($_GET['idCL']))
{
	$idCL=$_GET['idCL'];
}
require_once 'connect.php';
$sl="select * from chungloaisanpham where idCL=".$idCL."";
$qr=mysql_query($sl);
$row=mysql_fetch_array($qr);
?>
<form id="form1" name="form1" method="post" action="index.php?link=xulysuachungloai">
<input type="hidden" name="idCL" id="idCL" value="<?php echo $row['idCL']; ?>" />
  <table width="500" border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td width="200">Tên chủng loại sản phẩm:</td>
      <td><input name="tenchungloai" type="text" id="tenchungloai" size="30" value="<?php echo $row['TenCL']; ?>"/></td>
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
      <td><input type="reset" name="huy" id="huy" value="Hủy" /></td>
    </tr>
  </table>
</form>
</body>
</html>