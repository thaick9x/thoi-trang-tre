<?php
include ("connect.php");

if (isset ($_POST['tendangnhap']))
{
	$tendangnhap=$_POST['tendangnhap'];
}

$sl="select * from users where TenDangNhap='$tendangnhap'";
$qr=mysql_query($sl);
if (mysql_num_rows($qr)>0)
{
	echo "0";
}
else if (empty($tendangnhap))
{
	echo "2";
}
else if (strlen($tendangnhap)<8)
{
	echo "3";
}
else echo "1";
?>