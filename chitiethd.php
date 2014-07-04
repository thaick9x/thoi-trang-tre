<?php
$chuoi= array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9');
$tam=count ($chuoi)-1; // 36 - 1 = 35
$giatri="";
$i=0;
$giatri="";

require_once 'connect.php';
// lay danh sach tinh trang
$query = "select * from tinhtrang";
$kq = mysql_query($query);
$TRANG_THAI_HOA_DON = array();
$TRANG_THAI_HOA_DON[-1] = 'Tất cả';
while ($row = mysql_fetch_array($kq))
{
	$TRANG_THAI_HOA_DON[$row['idTinhTrang']] = $row['TinhTrang'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#dangky {
	width: 790px;
	border: 2px solid #690;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px;
	
}
.khonghople {
	font-weight: bolder;
	color: #F00;
}
.hople {
	font-weight: bolder;
	color: #0F0;
}

#namedangky {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #690;
}

#contentdangky {
	width: 100%;
}
.muclon {
	font-size: 18px;
	font-weight: bolder;
	color: #00F;
	padding-left: 5px;
}
.mucnho {
	font-weight: bolder;
	color: #C00;
}

#namelichsumuasam {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #690;
}

#contentlichsumuasam {
	width: 100%;
}
#trangchitietdonhang {
	margin: auto;
	width: 730px;
}
-->
</style>
<script src="jquery/jquery-1.8.0.js"></script>
</head>

<body>
<div id="trangchitietdonhang">
<?php


if (isset($_GET['idHD']))
{
	$idHoaDon=$_GET['idHD'];
	$query="select * from hoadon where hoadon.idHoaDon=".$idHoaDon;
	
	$kq=mysql_query($query);
	
		if ($row = mysql_fetch_array($kq))
		{	
			?>
<div id="namelichsumuasam">Chi Tiết Đơn Hàng</div>
    <div id="contentlichsumuasam">
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
    </div>
   
<?php
}
?>   
    
</div>

<?PHP
	if ($tinhtrang === 'Xem')
	{
	?>
		<a href="xuly_trangthai.php?idHoaDon=<?PHP echo $idHoaDon;?>&next=4"><input type="button" value="Hủy đơn hàng"></input></a><br>
	<?PHP

	}
?>

</body>
</html>