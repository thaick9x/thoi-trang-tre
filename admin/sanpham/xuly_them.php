<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
$link="images/";

if (isset ($_POST['chungloai']) && isset ($_POST['loai']))
{
	require_once '../../connect.php';
	$sl="insert into sanpham (idLoai,TenSP,idNCC,MoTa,NgayCapNhat,Gia,UrlHinh,SoLuongTonKho,AnHien) values ('".$_POST['loai']."','".$_POST['sanpham']."','".$_POST['ncc']."','".$_POST['mota']."','".$_POST['ngaycapnhat']."','".$_POST['gia']."','".$_FILES['hinhanh']['name']."','".$_POST['soluongthem']."','".$_POST['anhien']."')";	
	echo $sl;
	if (mysql_query($sl))
	{
		$link=$link.basename($_FILES['hinhanh']['name']);
		if (move_uploaded_file($_FILES['hinhanh']['tmp_name'],$link))
		{
			echo "vao day chua?";
			header ("location:http://localhost/thoi-trang-tre/admin/sanpham/sanpham.php");
		}
		else 
			echo "Thêm ảnh thất bại";
	}
	else
		echo "Thêm dữ liệu thất bại";
}
?>