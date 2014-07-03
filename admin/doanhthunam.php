<?PHP
define ("NAMBATDAU", 2010);
define ("NAMKETTHUC", 2020);
?>
<?PHP //error_reporting(E_ERROR | E_PARSE); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Doanh Thu Theo Năm</b></p>

<form id="formdoanhthunam" name="formdoanhthunam" action="" method="post">
	<p align="center" style="color:#06F; font-size:16px;">Chọn năm
	<select name="nam" >
<?PHP
		for ($i = NAMBATDAU; $i <= NAMKETTHUC; $i++)
		{
?>
			<option value="<?PHP echo $i; ?>">
			<?PHP echo $i; ?>
			</option>
<?PHP
		}
?>
	</select>
	<input type="submit" name="Submit" value="OK">
	</p>
</form>

<?PHP
if (isset($_POST['nam']))
{
	$nam = $_POST['nam'];
	
?>

<p align="center" style="color:#06F; font-size:24px;"><b>Doanh Thu Năm <?PHP echo $nam; ?></b></p>
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
	$query = "select A.*,`TenSP` from `sanpham` inner join (SELECT `idSP`,`ThoiGianDatHang`,`ThoiGianGiaoHang`,`TenKhachHang`,`SoLuong`,`Gia`,SoLuong*Gia as ThanhTien, SUM(SoLuong*Gia) as TongDoanhThu FROM `chitiethoadon` inner join `hoadon` on `chitiethoadon`.`idHoaDon` = `hoadon`.`idHoaDon` where `NamHD`=$nam) as A on `sanpham`.`idSP` = A.`idSP`";

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
		
	}
?>
			<tr>
				<td align="center" colspan="7"><p style="color:#F00">Tổng doanh thu năm</p></td>
				<td align="center"><?php echo $row['TongDoanhThu']; ?></td>
			</tr>
			
</table>
<?PHP
}

?>

</body>
</html>