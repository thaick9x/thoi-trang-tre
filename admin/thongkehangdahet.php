<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang thống kê Sản Phẩm đã hết hàng</b></p>
<table border="1" cellpadding="1" cellspacing="1" align="center" width="750" bordercolor="#0066FF">
<tr>
	<td align="center"><p style="color:#F00">Tên Sản Phẩm đã hết hàng</p></td>
    <td align="center"><p style="color:#F00">Hình ảnh Sản Phẩm đã hết hàng</p></td>
    <td align="center"><p style="color:#F00">Thêm</p></td>
</tr>
<?php
require_once '../connect.php';
$sl="select * from sanpham where SoLuongTonKho=0";
$qr=mysql_query($sl);
while ($row=mysql_fetch_array($qr))
{
?>
<tr>
	<td><?php echo $row['TenSP']; ?></td>
    <td align="center"><img src="images/<?php echo $row['UrlHinh'];?>" width="150" height="150" /></td>
    <td align="center"><a href="index.php?link=suasanpham">Thêm</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>