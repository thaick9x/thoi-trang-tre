<?PHP
require_once '../../connect.php';
// lay danh sach tinh trang
$query = "select * from tinhtrang";
$kq = mysql_query($query);
$TRANG_THAI_HOA_DON = array();
$TRANG_THAI_HOA_DON[-1] = 'Tất cả';
while ($row = mysql_fetch_array($kq))
{
	$TRANG_THAI_HOA_DON[$row['idTinhTrang']] = $row['TinhTrang'];
}

///

?>
<?PHP //error_reporting(E_ERROR | E_PARSE); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


if (isset($_GET['idHoaDon']))
{
	$idHoaDon=$_GET['idHoaDon'];
	$query="select * from hoadon where hoadon.idHoaDon=".$idHoaDon;
	
	$kq=mysql_query($query);
	
		if ($row = mysql_fetch_array($kq))
		{	
			?>
			<form action="" method="post" name="formchitiethoadon">
			<p align="center" style="font-size:36px">Hóa Đơn Bán Hàng</p>
			<table width="800" border="0" cellpadding="1" cellspacing="1" align="center">
				<tr>
					<td>Mã Hóa Đơn: <?php echo $row['idHoaDon']; ?></td>
					<td>Tên Khách Hàng: <?php echo $row['TenKhachHang']; ?></td>
					<td>Ghi chú</td>
				</tr>
				<tr>
					<td>Thời Gian Đặt Hàng: <?php echo $row['ThoiGianDatHang']; ?></td>
					<td>Số Điện Thoại: <?php echo $row['SoDT'];?></td>
					<td rowspan="3"><?php echo $row['GhiChu'];?></td>
				</tr>
				<tr>
					<td>Thời Gian Giao Hàng: <?php echo $row['ThoiGianGiaoHang'];?></td>
					<td>Địa Chỉ: <?php echo $row['DiaChi'];?></td>
				</tr>
				<tr>
					<td>Tình trạng: <?php echo $tinhtrang = $TRANG_THAI_HOA_DON[$row['idTinhTrang']];?></td>
					<td>Quận/Huyện: <?php echo $row['TenQuanHuyen'];?></td>
				</tr>
				
			</table>
			
			<?php
		}
	?>
	<br>
	<table width="790" border="1" cellpadding="3" cellspacing="1" align="center">
		<tr>
			<td>Mã Sản Phẩm</td>
			<td>Tên Sản Phẩm</td>
			<td>Số Lượng</td>
			<td>Giá</td>
			<td>Thành Tiền</td>
		</tr>
	<?php	
	$tong = 0;
	$query = "SELECT chitiethoadon.*, sanpham.idSP, TenSP, SoLuong*chitiethoadon.Gia AS ThanhTien FROM chitiethoadon INNER JOIN sanpham ON chitiethoadon.idSP = sanpham.idSP WHERE chitiethoadon.idHoaDon=".$idHoaDon;
	
	$kq = mysql_query($query);	
	while ($row = mysql_fetch_array($kq))
	{
		
	?>		
		<tr>
			<td align="right"><?php echo $row['idSP']; ?></td>
			<td><?php echo $row['TenSP'];?></td>
			<td align="right"><?php echo $row['SoLuong'];?></td>
			<td align="right"><?php echo $row['Gia'];?></td>
			<td align="right"><?php echo $row['ThanhTien'];?></td>
		</tr>
	<?php
		$tong += $row['ThanhTien'];
	}
} 
?>
	<tr>
		<td colspan="4" align="right">Tổng</td>
		<td align="right"><?php echo $tong;?></td>
	</tr>
</table>
				<input type="<?PHP if (isset($_POST['inhoadon'])) echo 'hidden'; else echo 'submit' ?>" name="inhoadon" value="In Hóa Đơn">
			</form>
<?PHP
if (!isset($_POST['inhoadon']))
{
	switch ($tinhtrang)
	{
		case 'Xem':
			?>
			<a href="xuly_trangthai.php?idHoaDon=<?PHP echo $idHoaDon;?>&next=2">Xác nhận đơn hàng</a><br>
			<a href="xuly_trangthai.php?idHoaDon=<?PHP echo $idHoaDon;?>&next=4">Hủy đơn hàng</a><br>
			<?PHP
			break;
		case 'Chưa giao hàng':
			?>
			<a href="xuly_trangthai.php?idHoaDon=<?PHP echo $idHoaDon;?>&next=3">Xác nhận đã giao hàng</a><br>
			<?PHP
			break;
		
	?>
	
	<?PHP
	}
}
else {
?>
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
<a href="javascript:window.print()"><img src="../../images_index/1350525387_print.png" width="7%" height="7%"></a> 

<?PHP
}
?>
</body>
</html>
