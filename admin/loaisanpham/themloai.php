<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Thêm Loại Sản Phẩm</b></p>
<form id="form1" name="form1" method="post" action="http://localhost/thoi-trang-tre/admin/loaisanpham/xuly_them.php">
  <table width="500" border="1" cellspacing="1" cellpadding="1" align="center">
    <tr>
      <td>Tên chủng loại Sản Phẩm:</td>
      <td><select name="chungloai" id="chungloai">
      <?php
	  require_once '../../connect.php';
	  $slcl="select * from chungloaisanpham";
	  $qrcl=mysql_query($slcl);
	  while ($rowcl=mysql_fetch_array($qrcl))
	  {
	  ?>
      <option value="<?php echo $rowcl['idCL']; ?>"><?php echo $rowcl['TenCL']; ?></option>
      <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td width="200">Tên loại sản phẩm:</td>
      <td><input type="text" name="tenloai" id="tenloai" size="30" /></td>
    </tr>
    <tr>
      <td>Ẩn hiện:</td>
      <td><select name="anhien" id="anhien">
      <option value="0">Ẩn</option>
      <option value="1">Hiện</option>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="them" id="them" value="Thêm" /></td>
      <td><a href="loaisanpham.php"><input type="button" name="xoa" id="xoa" value="Hủy" /></a></td>
    </tr>
  </table>

</form>
</body>
</html>