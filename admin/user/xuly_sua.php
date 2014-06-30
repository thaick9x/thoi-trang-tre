<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>
</head>
<?php ob_start();
include ("../../connect.php");
if (isset ($_GET['idUser']))
$idUser =$_GET['idUser'];
$sl="update users set TenDangNhap = '".$_POST['tendangnhap']."',HoVaTen = '".$_POST['hovaten']."',GioiTinh = '".$_POST['gioitinh']."',NgaySinh = '".$_POST['ngaysinh']."',DiaChi = '".$_POST['diachi']."',TinhThanh = '".$_POST['tinh']."',SoDT = '".$_POST['sodt']."',SoCMND = '".$_POST['cmnd']."', PhanQuyen = '".$_POST['phanquyen']."' where idUser = ".$idUser."";
if (mysql_query($sl))
	header ("location:users.php");
else 
	echo " Sửa loại sản phẩm thất bại";
?>