<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>
</head>
<?php ob_start();
require_once '../../connect.php';
$sl="update chungloaisanpham set `TenCL`='".$_POST['tenchungloai']."', `AnHien`='".$_POST['anhien']."' where idCL=".$_POST['idCL'];
if (mysql_query($sl))
{
	header ("location:chungloai.php");
}
else 
{
	echo "Xóa Chủng Loại Sản Phẩm thất bại";
}
?>