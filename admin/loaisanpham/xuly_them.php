<?php ob_start();
include ("../../connect.php");
$sl="insert into loaisanpham (`idCL`,`TenLoai`,`AnHien`) value ('".$_POST['chungloai']."','".$_POST['tenloai']."','".$_POST['anhien']."')";
if (mysql_query($sl))
	header ("location:index.php?link=quanlyloai");
else 
	echo "Thêm loại sản phẩm thất bại";
?>