<?php ob_start();
if (isset($_GET['idCL']))
$idCL=$_GET['idCL'];
$sl1="delete from chungloaidochoi where idCL=$idCL";
$sl2="delete from loaidochoi where idCL='$idCL'";
$sl3="delete from dochoi where idCL='$idCL'";
if (mysql_query($sl1) && mysql_query($sl2) && mysql_query($sl3))
{
	header ("location:index.php?link=quanlychungloai");
}
else 
{
	echo "Xóa Chủng Loại Sản Phẩm thất bại";
}
?>