<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#trangquantri {
	text-align: center;
}
-->
</style>
</head>
<?php ob_start();
require_once '../../connect.php';
$sl="insert into nhacungcap (`TenNCC`,`DiaChi`,`ThongTin`,`AnHien`) value ('".$_POST['tennhacungcap']."','".$_POST['diachinhacungcap']."','".$_POST['thongtinnhacungcap']."','".$_POST['anhien']."')";
if (mysql_query($sl))
{
	header ("location: nhacungcap.php");
}
else
	echo "Thêm Nhà Cung Cấp thất bại";
?>
</head>

<body>
</body>
</html>