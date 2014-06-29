<?php ob_start();
include ("connect.php");

if (isset ($_POST['tendangnhap']))
{
	$sl="insert into users (`TenDangNhap`,`MatKhau`,`HoVaTen`,`GioiTinh`,`NgaySinh`,`DiaChi`,`TinhThanh`,`SoDT`,`SoCMND`,`NgayCapCMND`,`NoiCapCMND`) value ('".$_POST['tendangnhap']."','".$_POST['matkhau']."','".$_POST['hovaten']."','".$_POST['gioitinh']."','".$_POST['ngaysinh']."','".$_POST['diachi']."','".$_POST['tinhthanhpho']."','".$_POST['sodienthoai']."','".$_POST['socmnd']."','".$_POST['ngaycapcmnd']."','".$_POST['noicapcmnd']."')";
	if (mysql_query($sl))
	{
		header("location:index.php");
	}
	else 
	echo $sl;
}
?>