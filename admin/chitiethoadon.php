<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ("../connect.php");
require_once '../connect.php';
if (isset($_GET['idHoaDon']))
{
	$idHoaDon=$_GET['idHoaDon'];	
	$sllsms="select * from hoadon, chitiethoadon where hoadon.idHoaDon=".$idHoaDon." and chitiethoadon.idHoaDon= hoadon.idHoaDon";
	echo $sllsms;
	$qrlsms=mysql_query($sllsms);
if ($rowhd=mysql_fetch_array($qrlsms))
{
?>
<p align="center" style="font-size:36px">Hóa Đơn</p>
<p>Mã số hóa đơn:<?php echo $rowhd['idHoaDon']; ?></p>
<p>Tên khách hàng:<?php echo $rowhd['TenKhachHang']; ?></p>
<p>Ngày đặt hàng:<?php echo $rowhd['ThoiGianDatHang']; ?></p>
<?php
}
?>
<table width="790" border="1" cellpadding="1" cellspacing="1" align="center">
    <tr>
    	<td>Mã Số Hóa Đơn</td>
        <td>Thời Gian Đặt Hàng</td>
        <td>Tên Khách Hàng</td>
        <td>Số Chứng Minh Dân Nhân</td>
        <td>Số Điện Thoại</td>
        <td>Địa Chỉ</td>
        <td>Quận Huyện</td>
        <td>Tên Sản Phẩm</td>
        <td>Số Lượng</td>
        <td>Giá</td>
    </tr>
<?php
while ($rowlsms=mysql_fetch_array($qrlsms))
{
?>

	<tr>
    	<td><?php echo $rowlsms['idHoaDon']; ?></td>
        <td><?php echo $rowlsms['ThoiGianDatHang'];?></td>
        <td><?php echo $rowlsms['TenKhachHang'];?></td>
        <td><?php echo $rowlsms['SoCMND'];?></td>
        <td><?php echo $rowlsms['SoDT'];?></td>
        <td><?php echo $rowlsms['DiaChi'];?></td>
        <td><?php echo $rowlsms['TenQuanHuyen'];?></td>
        <td><?php
				require_once '../connect.php';

				$sldc="select * from sanpham where idSP=".$rowlsms['idSP'];
				$qrdc=mysql_query($sldc);
				if ($rowdc=mysql_fetch_array($qrdc))
				{
				echo $rowdc['TenSP'];
				}
			?></td>
        <td><?php echo $rowlsms['SoLuong'];?></td>
        <td><?php echo $rowlsms['Gia'];?></td>
    </tr>
<?php
}
} 
?>

</table>
<br />
<br />
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><p>Chủ cửa hàng</p>
    <p>Ký tên</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>Họ và tên: .............................................</p></td>
    <td align="center"><p>Khách hàng</p>
    <p>Ký tên</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>Họ và tên: .............................................</p></td>
  </tr>
</table>
<a href="javascript:window.print()"><img src="../images_index/1350525387_print.png" width="7%" height="7%"></a> 
</body>
</html>
