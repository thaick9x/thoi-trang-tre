<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>
</head>

<?php ob_start();
$link="images/";
if (isset ($_POST['idSP']))
{
	$idSP=$_POST['idSP'];
	include ("../../connect.php");
	$sl="update sanpham set idCL = '".$_POST['chungloai']."',idLoai = '".$_POST['loai']."', TenSP='".$_POST['tensanpham']."',MoTa ='".$_POST['mota']."',Gia='".$_POST['gia']."', AnHien='".$_POST['anhien']."'";
	if (($urlhinh = $_FILES['hinhanh']['name']) !== '')
	{
		$sl .= ",UrlHinh ='".$_FILES['hinhanh']['name']."'";
	}
	$sl .= " where idSP ='".$idSP."'";
	echo $sl;
	if (mysql_query($sl))
	{
		if (($urlhinh = $_FILES['hinhanh']['name']) !== '')
		{
			$link=$link.basename($_FILES['hinhanh']['name']);
			if (move_uploaded_file($_FILES['hinhanh']['tmp_name'],$link))
			{
				header ("location:/thoi-trang-tre/admin/sanpham/sanpham.php");
			}
			else 
				echo "Thêm SP thất bại";
		}
		else
		{
			echo "Thêm SP thành công";
			header ("location:/thoi-trang-tre/admin/sanpham/sanpham.php");
		}
	}
}
?>