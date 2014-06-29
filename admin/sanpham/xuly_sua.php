<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>
</head>
<?php ob_start();
if (isset ($_POST['idSP']))
$idSP=$_POST['idSP'];
include ("../../connect.php");
$sl="update sanpham set TenSP='".$_POST['tensanpham']."',MoTa='".$_POST['Mota']."', AnHien='".$_POST['anhien']."' where idSP='".$idSP."'";
echo $sl;
if (mysql_query($sl))
	header ("location:sanpham.php");
else 
	echo "Sửa loại sản phẩm thất bại";
?>