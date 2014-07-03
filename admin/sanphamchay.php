<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Sản Phẩm Bán Chạy</b></p>
<table border="1" cellpadding="1" cellspacing="1" align="center" width="750" bordercolor="#0066FF">
<tr>
	<td align="center"><p style="color:#F00">Mã Sản Phẩm</p></td>
	<td align="center"><p style="color:#F00">Tên Sản Phẩm</p></td>
    <td align="center"><p style="color:#F00">Hình ảnh</p></td>
	<td align="center"><p style="color:#F00">Số lượng đã bán</p></td>
</tr>
<?php
require_once '../connect.php';
$sl="select idSP, TenSP, UrlHinh, SoLuongDaBan from sanpham order by SoLuongDaBan DESC limit 20";
$qr=mysql_query($sl);
while ($row=mysql_fetch_array($qr))
{
?>
<tr>
	<td align="center"><?php echo $row['idSP']; ?></td>
	<td align="center"><?php echo $row['TenSP']; ?></td>
    <td align="center"><img src="images/<?php echo $row['UrlHinh'];?>" width="50" height="50" /></td>
	<td align="center"><?php echo $row['SoLuongDaBan']; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html>