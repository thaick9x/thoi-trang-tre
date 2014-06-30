<?php 
 @session_start();
ob_start();

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require_once 'connect.php';

if (isset($_SESSION['giohang']) && count($_SESSION['giohang'])>0 && isset ($_SESSION['dangnhap']['idtendangnhap']))
{
	require_once 'connect.php';
	$sluser="select * from users where idUser=".$_SESSION['dangnhap']['idtendangnhap'];
	$qruser=mysql_query($sluser);
	if (mysql_num_rows($qruser)>0)
	{
		$rowuser=mysql_fetch_array($qruser);
		$tenkh=$rowuser['HoVaTen'];
	
		$ngaydathang=$_REQUEST['ngaydathang'];
		$tenkhachhanggiohang=$_REQUEST['tenkhachhanggiohang'];
		$socmndgiohang=$_REQUEST['socmndgiohang'];
		$dienthoaigiohang=$_REQUEST['dienthoaigiohang'];
		$diachigiohang=$_REQUEST['diachigiohang'];
		$quanhuyengiohang=$_REQUEST['quanhuyengiohang'];
		$thongtinkhac=$_REQUEST['thongtinkhac'];	
		$thongtin="insert into hoadon (`idUser`,`ThoiGianDatHang`,`TenKhachHang`,`SoCMND`,`SoDT`,`DiaChi`,`TenQuanHuyen`,`GhiChu`) values (".$_SESSION['dangnhap']['idtendangnhap'].",'".$ngaydathang."','".$tenkh."','".$socmndgiohang."','".$dienthoaigiohang."','".$diachigiohang."','".$quanhuyengiohang."','".$thongtinkhac."')";
		if(mysql_query($thongtin))
	{
		$id=mysql_insert_id();
		echo $thongtin.mysql_error();
		for($i=0;$i<count($_SESSION["giohang"]);$i++)
		{
			$masp=$_SESSION["giohang"][$i]["idSP"];
			$soluong=$_SESSION["giohang"][$i]["soluong"];
			$gia=$_SESSION["giohang"][$i]["Gia"];
			$them="insert into chitiethoadon values (".$id.",'".$masp."','".$soluong."',".$gia.")";
			if(mysql_query($them))
			{
								
				}
		
		}
		header("index.php?link=guihoadonthanhcong");

	}
	else echo $thongtin.mysql_error();
	if(count($_SESSION["giohang"])>0)
{
	 unset($_SESSION['giohang']);
}
	
	}
	
}

?>