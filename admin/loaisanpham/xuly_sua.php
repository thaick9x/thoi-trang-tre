<?php ob_start();
if (isset ($_POST['idLoai']))
$idLoai=$_POST['idLoai'];
include ("../../connect.php");
$sl="update loaisanpham set `TenLoai`='".$_POST['tenloai']."', `AnHien`='".$_POST['anhien']."', `idCL`='".$_POST['tenchungloai']."' where idLoai='$idLoai'";
if (mysql_query($sl))
	header ("location:index.php?link=quanlyloai");
else 
	echo "Sửa loại sản phẩm thất bại";
?>