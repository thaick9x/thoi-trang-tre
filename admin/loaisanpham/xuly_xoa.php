<?php ob_start();
if (isset ($_GET['idLoai']))
$idLoai=$_GET['idLoai'];
$sl1="delete from loaisanpham where idLoai='$idLoai'";
$sl2="delete from sanpham where idLoai='$idLoai'";
if (mysql_query($sl1) && mysql_query($sl2))
	header ("location:index.php?link=quanlyloai");
else 
	echo "Xóa loại sản phẩm thất bại";
?>