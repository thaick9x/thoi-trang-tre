<?php session_start(); ob_start();
if (isset($_GET['thutu']))
{
	$thutu=$_GET['thutu'];
}
for ($i=$thutu;$i<count($_SESSION['giohang']);$i++)
{
	$j=$i+1;
	$_SESSION['giohang'][$i]['idSP']=$_SESSION['giohang'][$j]['idSP'];
	$_SESSION['giohang'][$i]['TenSP']=$_SESSION['giohang'][$j]['TenSP'];
	$_SESSION['giohang'][$i]['Gia']=$_SESSION['giohang'][$j]['gia'];
	$_SESSION['giohang'][$i]['soluong']=$_SESSION['giohang'][$j]['soluong'];
}

$xoa=count($_SESSION['giohang']);
unset ($_SESSION['giohang'][$xoa - 1]);
header ("location:index.php");

?>