<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php ob_start();
require_once "../../connect.php";

	if (isset($_GET['idNCC']))
		$idNCC=$_GET['idNCC'];
		$sl="delete from nhacungcap where idNCC=".$idNCC."";
		if (mysql_query($sl))	{
		header ("location:nhacungcap.php");
	}
	else 
	{
		echo "Xóa Nhà Cung Cấp thất bại";
	}
	?>
<body>
</body>
</html>