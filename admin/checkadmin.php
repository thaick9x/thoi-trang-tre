<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />

<?php ob_start(); session_start();



include ("../connect.php");

if (isset ($_POST['txtuser']) && isset ($_POST['txtpass']))
{
	$tendangnhap=$_POST['txtuser'];
	$matkhau=$_POST['txtpass'];
}

$sldn="select * from users where PhanQuyen='1' and TenDangNhap='$tendangnhap' and MatKhau='$matkhau'";
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
	//echo $_SESSION['dangnhap']['tendangnhap'];
	header("location:index.php");
}
else echo "Sai mật khẩu hoặc tên đăng nhập không tồn tại.";
?>