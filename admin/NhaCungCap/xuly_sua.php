<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php ob_start();
require_once '../../connect.php';
$sl="update nhacungcap set `TenNCC`='".$_POST['tenNCC']."', `DiaChi`='".$_POST['DiaChi']."',`ThongTin`='".$_POST['ThongTin']."',`AnHien`='".$_POST['anhien']."' where idNCC=".$_POST['idNCC'];
if (mysql_query($sl))
{
	header ("location:nhacungcap.php");
}
else 
{
	echo "Xóa nhà cung cấp thất bại";
}
?>
<body>
</body>
</html>