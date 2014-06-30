<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>

</head>
<?php ob_start();
//echo $_POST['acc'];

	require_once 'connect.php';
	//echo $_POST['hovaten'];
	
	$sl="update users set MatKhau = ".$_POST['nhaplaimatkhau'].",HoVaTen = '".$_POST['hovaten']."', GioiTinh = '".$_POST['gioitinh']."',NgaySinh = '".$_POST['ngaysinh']."', DiaChi = '".$_POST['diachi']."',TinhThanh = '".$_POST['tinhthanhpho']."',SoDT = '".$_POST['sodienthoai']."',SoCMND = '".$_POST['socmnd']."', NgayCapCMND = '".$_POST['ngaycapcmnd']."', NoiCapCMND ='".$_POST['noicapcmnd']."' where idUser = '".$_POST['acc']."'";
		if (mysql_query($sl))
		{
			header("location:index.php");
		}
		else 
			echo "thất bại";
	
?>