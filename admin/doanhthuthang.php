<?PHP error_reporting(E_ERROR | E_PARSE); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Doanh Thu Theo Tháng</b></p>

<form id="formdoanhthuthang" name="formdoanhthuthang" action="" method="post">
	<p align="center" style="color:#06F; font-size:16px;">Chọn tháng
	<input type="month" name="thang">
	<input type="submit" name="Submit" value="OK">
	</p>
</form>

<?PHP
if (isset($_POST['thang']))
{
	$thang = substr($_POST['thang'],5,2);
	$nam = substr($_POST['thang'],0,4);
  
?>

<p align="center" style="color:#06F; font-size:24px;"><b>Doanh Thu Tháng <?PHP echo $thang."-".$nam ?></b></p>
<table border="1" cellpadding="1" cellspacing="1" align="center" width="250" bordercolor="#0066FF">

<tr>
	<td align="center"><p style="color:#F00">ID Sản Phẩm</p></td>
	<td align="center"><p style="color:#F00">Tên Sản Phẩm</p></td>
	<td align="center"><p style="color:#F00">Số Lượng</p></td>
	<td align="center"><p style="color:#F00">Đơn Giá</p></td>
	<td align="center"><p style="color:#F00">Ngày Mua Hàng</p></td>
	<td align="center"><p style="color:#F00">Ngày Xuất Hàng</p></td>
	<td align="center"><p style="color:#F00">Khách Hàng</p></td>
	<td align="center"><p style="color:#F00">Thành Tiền</p></td>
</tr>
<?php
	require_once '../connect.php';
	$query = "select A.*,`TenSP` from `sanpham` inner join (SELECT `idSP`,`ThoiGianDatHang`,`ThoiGianGiaoHang`,`TenKhachHang`,`SoLuong`,`Gia`,SoLuong*Gia as ThanhTien FROM `chitiethoadon` inner join `hoadon` on `chitiethoadon`.`idHoaDon` = `hoadon`.`idHoaDon` where `ThoiGianGiaoHang` between '$nam-$thang-01' and '$nam-$thang-31') as A on `sanpham`.`idSP` = A.`idSP`";
	
	$tong = 0;
	$kq = mysql_query($query);
	while ($row=mysql_fetch_array($kq))
	{
		
			?>
			<tr>
				<td align="center"><?php echo $row['idSP']; ?></td>
				<td align="center"><?php echo $row['TenSP']; ?></td>
				<td align="center"><?php echo $row['SoLuong']; ?></td>
				<td align="center"><?php echo $row['Gia']; ?></td>
				<td align="center"><?php echo $row['ThoiGianDatHang']; ?></td>
				<td align="center"><?php echo $row['ThoiGianGiaoHang']; ?></td>
				<td align="center"><?php echo $row['TenKhachHang']; ?></td>
				<td align="center"><?php echo $row['ThanhTien']; ?></td>
			</tr>
			<?php
			$tong += $row['ThanhTien'];
	}
?>
<tr>
<td align="center" colspan="7"><p style="color:#F00">Tổng doanh thu tháng</p></td>
<td align="center"><?php echo $tong; ?></td>
</tr>

<?PHP
}

?>

</table>
</body>
</html>