<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php ob_start();
include ("../../connect.php");
$sl="insert into loaisanpham (`idCL`,`TenLoai`,`AnHien`) value ('".$_POST['chungloai']."','".$_POST['tenloai']."','".$_POST['anhien']."')";
if (mysql_query($sl))
	header ("location:http://localhost/thoi-trang-tre/admin/loaisanpham/loaisanpham.php");
else 
	echo "Thêm loại sản phẩm thất bại";
?>