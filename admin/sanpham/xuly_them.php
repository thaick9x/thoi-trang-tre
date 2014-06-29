<?php
$link="images/";

if (isset ($_POST['chungloai']) && isset ($_POST['loai']))
{
	$sl="insert into sanpham (`idCL`,`idLoai`,`TenDC`,`MoTa`,`NgayCapNhat`,`Gia`,`UrlHinh`,`SoLuongTonKho`,`AnHien`) values ('".$_POST['chungloai']."','".$_POST['loai']."','".$_POST['sanpham']."','".$_POST['mota']."','".$_POST['ngaycapnhat']."','".$_POST['gia']."','".$_FILES['hinhanh']['name']."','".$_POST['soluongthem']."','".$_POST['anhien']."')";
	if (mysql_query($sl))
	{
		$link=$link.basename($_FILES['hinhanh']['name']);
		if (move_uploaded_file($_FILES['hinhanh']['tmp_name'],$link))
		{
			header ("location:../../index.php?link=quanlysanpham");
		}
		else 
			echo "Thêm ảnh thất bại";
	}
	else
		echo "Thêm dữ liệu thất bại";
}
?>