<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>

</head>
<?php ob_start();
require_once 'connect.php';
	$sl="insert into users (`TenDangNhap`,`MatKhau`,`HoVaTen`,`GioiTinh`,`NgaySinh`,`DiaChi`,`TinhThanh`,`SoDT`,`SoCMND`,`NgayCapCMND`,`NoiCapCMND`) value ('".$_POST['tendangnhap']."','".$_POST['matkhau']."','".$_POST['hovaten']."','".$_POST['gioitinh']."','".$_POST['ngaysinh']."','".$_POST['diachi']."','".$_POST['tinhthanhpho']."','".$_POST['sodienthoai']."','".$_POST['socmnd']."','".$_POST['ngaycapcmnd']."','".$_POST['noicapcmnd']."')";
	if (mysql_query($sl))
	{
		header("location:index.php");
	}
	else 
		echo "thất bại";
	
?>