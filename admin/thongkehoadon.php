<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang thống kê Hóa đơn</b></p>
<table border="1" cellpadding="1" cellspacing="1" align="center" width="750" bordercolor="#0066FF">
<tr>
	<td align="center"><p style="color:#F00">Mã số hóa đơn</p></td>
    <td align="center"><p style="color:#F00">Thời đặt hàng</p></td>
    <td align="center"><p style="color:#F00">Tên khách hàng</p></td>
    <td align="center"><p style="color:#F00">Số CMND</p></td>
    <td align="center"><p style="color:#F00">Số điện thoại</p></td>
    <td align="center"><p style="color:#F00">Địa chỉ</p></td>
    <td align="center"><p style="color:#F00">Tên quận huyện</p></td>
    <td align="center"><p style="color:#F00">Ghi Chú</p></td>
    <td align="center"><p style="color:#F00">Tình trạng hóa đơn</p></td>
    <td align="center"><p style="color:#F00">In hóa đơn</p></td>
</tr>
<?php
require_once '../connect.php';
$sl="select * from hoadon";
$qr=mysql_query($sl);
while ($row=mysql_fetch_array($qr))
{
?>
<tr>
	<td><?php echo $row['idHoaDon']; ?></td>
    <td><?php echo $row['ThoiGianDatHang'];?></td>
    <td><?php echo $row['TenKhachHang'];?></td>
    <td><?php echo $row['SoCMND'];?></td>
    <td><?php echo $row['SoDT'];?></td>
    <td><?php echo $row['DiaChi'];?></td>
    <td><?php echo $row['TenQuanHuyen'];?></td>
    <td><?php echo $row['GhiChu'];?></td>
    <td><?php echo $row['TinhTrang'];?></td>
    <td align="center"><a href="admin/chitiethoadon.php?idHoaDon=<?php echo $row['idHoaDon']; ?>" target="_blank">In</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html>