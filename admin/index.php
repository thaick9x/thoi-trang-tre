<?php session_start(); ob_start();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#trangquantri {
	text-align: center;
}
-->
</style>
</head>

<body>


<?PHP
if ((!isset($_COOKIE['tendangnhap']) && !isset($_SESSION['dangnhap']['tendangnhap'])) || ($_SESSION['dangnhap']['quyen'] != 1))
{
?>
	<div id="formdangnhapadmin" align="center">
    <form id="formdangnhap2" name="formdangnhap2" method="post" action="checkadmin.php">
		<table>
			<tr>
				<td>Tên đăng nhập</td>
				<td><input type="text" name="txtuser" id="txtuser" /></td>
			</tr>
			<tr>
				<td>Mật khẩu</td>
				<td><input type="password" name="txtpass" id="txtpass" /></td>
			</tr>
			<tr>
				<td align="right"><input type="checkbox" name="checkghinho" id="checkghinho" /></td>
				<td>Ghi nhớ đăng nhập</td>
			</tr>
			<tr>
				<td><input type="submit" name="butdangnhap" id="butdangnhap" value="Đăng nhập" /></td>
				<td><input type="button" value="Về trang chủ" onclick="location.href = '/thoi-trang-tre'" /></td>
			</tr>
			
		
		</table>

	</form>
	</div>
<?php
}
else
{
echo "Chào ".$_SESSION['dangnhap']['tendangnhap'];
?>

<div id="trangquantri">
	<p align="center" style="color:#06F; font-size:24px;"><b>Trang chủ quản trị</b></p>
	<table width="700" border="1" cellspacing="1" cellpadding="1" align="center" bordercolor="#0066FF">
		<tr>
			<td align="center"><p style="color:#F00">Quản lý</p></td>
			<td align="center"><p style="color:#F00">Chỉnh sửa</p></td>
			<td align="center"><p style="color:#F00">Thống kê</p></td>
		</tr>
		<tr>
			<td width="228">
				<a href="chungloaisanpham/chungloai.php"><p>Chủng loại Sản Phẩm</p></a>
				<a href="/thoi-trang-tre/admin/loaisanpham/loaisanpham.php"><p>Loại Sản Phẩm</p></a>
				<a href="/thoi-trang-tre/admin/sanpham/sanpham.php"><p>Sản Phẩm</p></a>
				<a href="/thoi-trang-tre/admin/user/users.php"><p>Users</p></a>
			</td>
			<td width="227" valign="top"><a href="/thoi-trang-tre/admin/chinhsua/?link=gioithieu"><p>Trang giới thiệu</p></a>
				<a href="#"><p>Trang tuyển dụng</p></a>
				<a href="/thoi-trang-tre/admin/chinhsua/?link=lienhe"><p>Trang liên hệ</p></a>
			</td>
			<td width="227" valign="top"><a href="/thoi-trang-tre/admin/thongkehangdahet.php"><p>Hàng đã hết trong kho</p></a>
				<a href="/thoi-trang-tre/admin/doanhthungay.php"><p>Doanh thu theo ngày</p></a>
				<a href="/thoi-trang-tre/admin/doanhthuthang.php"><p>Doanh thu theo tháng</p></a>
				<a href="/thoi-trang-tre/admin/doanhthunam.php"><p>Doanh thu theo năm</p></a>
				<a href="/thoi-trang-tre/admin/thongkehoadon.php"><p>Thống kê hóa đơn</p></a>
			</td>
		</tr>
		<tr>
			
			<td><input type="button" value="Về trang chủ" onclick="location.href = '/thoi-trang-tre'" /></td>
		</tr>
	</table>

</div>

<?PHP
}
?>
</body>
</html>