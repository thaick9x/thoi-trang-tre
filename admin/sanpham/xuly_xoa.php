<?php
include ("../../connect.php");

if (isset ($_GET['idSP']))
$idDC=$_GET['idSP'];

$sl="delete from sanpham where idSP='$idSP'";
if (mysql_query($sl))
{
	header ("location:index.php?quanlysanpham");
}
else 
	echo "Xóa Sản Phẩm thất bại";
?>