<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>
</head>
<?php ob_start();
require_once '../../connect.php';
if (isset ($_GET['idLoai']))
	$idLoai=$_GET['idLoai'];
	$sl1="delete from loaisanpham where idLoai=".$idLoai."";
	$sl2="delete from sanpham where idLoai=".$idLoai."";
	if (mysql_query($sl1) && mysql_query($sl2))
		header ("location:loaisanpham.php");
	else 
		echo "Xóa loại sản phẩm thất bại";
?>