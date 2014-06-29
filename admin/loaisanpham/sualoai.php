<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require_once '../../connect.php';
if (isset ($_GET['idLoai']))
$idLoai=$_GET['idLoai'];

$sll="select * from loaisanpham where idLoai='$idLoai'";
$qrl=mysql_query($sll);
if ($rowl=mysql_fetch_array($qrl))
{
?>
<form id="form1" name="form1" method="post" action="http://localhost/thoi-trang-tre/admin/loaisanpham/xuly_sua.php">
  <table width="500" border="1" cellspacing="1" cellpadding="1" align="center">
    <tr>
      <td width="200">Tên chủng loại sản phẩm:</td>
      <td><select name="tenchungloai" id="tenchungloai">
      <?php
	  $slcl="select * from chungloaisanpham";
	  $qrcl=mysql_query($slcl);
	  while ($rowcl=mysql_fetch_array($qrcl))
	  {
	  ?>
      <option value="<?php echo $rowcl['idCL']; ?>" <?php if ($rowl['idCL']==$rowcl['idCL']) echo "selected='selected'"; ?>><?php echo $rowcl['TenCL']; ?></option>
      <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>Tên loại sản phẩm:</td>
      <td><input name="tenloai" type="text" id="tenloai" size="30" value="<?php echo $rowl['TenLoai']; ?>" /></td>
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
  <input type="hidden" id="idLoai" name="idLoai" value="<?php echo $rowl['idLoai']; ?>" />
</form>
<?php
}
?>
</body>
</html>