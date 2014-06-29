<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>
</head>
<?php ob_start();
if (isset ($_POST['idLoai']))
$idLoai=$_POST['idLoai'];
include ("../../connect.php");
$sl="update loaisanpham set `TenLoai`='".$_POST['tenloai']."', `AnHien`='".$_POST['anhien']."', `idCL`='".$_POST['tenchungloai']."' where idLoai=".$idLoai."";
if (mysql_query($sl))
	header ("location:loaisanpham.php");
else 
	echo "Sửa loại sản phẩm thất bại";
?>