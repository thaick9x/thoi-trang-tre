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
<p align="center" style="color:#06F; font-size:24px;"><b>Quản Lý Hóa Đơn</b></p>

<form id="formquanlyhoadon" name="formquanlyhoadon" action="" method="post">
	<p align="center" style="color:#06F; font-size:16px;">Tìm theo tình trạng
	<select name="trangthai" >
<?PHP
		foreach ($TRANG_THAI_HOA_DON as $value => $caption)
		{
?>
			<option value="<?PHP echo $value; ?>">
			<?PHP echo $caption; ?>
			</option>
<?PHP
		}
?>
	</select>
	<input type="submit" name="Submit" value="OK">
	</p>
</form>


<?PHP
if (isset($_POST['trangthai']))
{
	$trangthai = $_POST['trangthai'];

?>
<p align="center" style="color:#06F; font-size:24px;"><b>Danh Sách Hóa Đơn <i><?PHP echo $TRANG_THAI_HOA_DON[$trangthai]; ?></i></b></p>
<table border="1" cellpadding="1" cellspacing="1" align="center" width="750" bordercolor="#0066FF">
<tr>
	<td align="center"><p style="color:#F00">Mã số hóa đơn</p></td>
    <td align="center"><p style="color:#F00">Thời gian đặt hàng</p></td>
    <td align="center"><p style="color:#F00">Tên khách hàng</p></td>
    <td align="center"><p style="color:#F00">Số CMND</p></td>
    <td align="center"><p style="color:#F00">Số điện thoại</p></td>
    <td align="center"><p style="color:#F00">Địa chỉ</p></td>
    <td align="center"><p style="color:#F00">Tên quận huyện</p></td>
	<td align="center"><p style="color:#F00">Thời gian giao hàng</p></td>
    <td align="center"><p style="color:#F00">Ghi Chú</p></td>
    <td align="center"><p style="color:#F00">Tình trạng hóa đơn</p></td>
    <td align="center"><p style="color:#F00">Tùy chọn</p></td>
</tr>
<?php

$sl="select * from hoadon inner join tinhtrang on hoadon.idTinhTrang = tinhtrang.idTinhTrang";
if ($trangthai != -1)
{
	$sl .= " where hoadon.idTinhTrang = $trangthai";
}
$sl .= " order by ThoiGianDatHang DESC";
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
	<td><?php echo $row['ThoiGianGiaoHang'];?></td>
    <td><?php echo $row['GhiChu'];?></td>
    <td><?php echo $row['TinhTrang'];?></td>
    <td align="center">
		<a href="/thoi-trang-tre/admin/hoadon/chitiethoadon.php?idHoaDon=<?php echo $row['idHoaDon']; ?>" target="_blank">Chi Tiết</a>
		
	</td>
</tr>
<?php
}
?>
</table>

<?PHP
}

?>

</body>
</html>