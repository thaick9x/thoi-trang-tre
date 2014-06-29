<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php ob_start();
require_once "../../connect.php";

	if (isset($_GET['idCL']))
		$idCL=$_GET['idCL'];
		$sl1="delete from chungloaisanpham where idCL=$idCL";
		$sl2="delete from loaisanpham where idCL='$idCL'";
		$sl3="delete from sanpham where idCL='$idCL'";
	if (mysql_query($sl1) && mysql_query($sl2) && mysql_query($sl3))
	{
		header ("location:chungloai.php");
	}
	else 
	{
		echo "Xóa Chủng Loại Sản Phẩm thất bại";
	}
	?>
</body>