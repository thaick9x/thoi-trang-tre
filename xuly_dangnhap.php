<?php ob_start(); session_start();
include ("connect.php");

if (isset ($_POST['txtuser']) && isset ($_POST['txtpass']))
{
	$tendangnhap=$_POST['txtuser'];
	$matkhau=md5($_POST['txtpass']);
}

$sldn="select * from users where TenDangNhap='$tendangnhap' and MatKhau='$matkhau'";
$qrdn=mysql_query($sldn);
if (mysql_num_rows($qrdn)>0)
{
	$rowdn=mysql_fetch_array($qrdn);
	$_SESSION['dangnhap']['tendangnhap']=$tendangnhap;
	$_SESSION['dangnhap']['idtendangnhap']=$rowdn['idUser'];
	$_SESSION['dangnhap']['quyen']=$rowdn['PhanQuyen'];
	if (isset ($_POST['checkghinho']))
	{
		setcookie("tendangnhap","$tendangnhap",time()+120);
	}
	header("location:index.php");
}
else header("location:index.php?link=saidangnhap");
?>