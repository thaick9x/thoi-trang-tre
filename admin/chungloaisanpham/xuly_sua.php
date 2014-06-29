<?php ob_start();
$sl="update chungloaisanpham set `TenCL`='".$_POST['tenchungloai']."', `AnHien`='".$_POST['anhien']."' where idCL=".$_POST['idCL'];
if (mysql_query($sl))
{
	header ("location:index.php?link=quanlychungloai");
}
else 
{
	echo "Xóa Chủng Loại Sản Phẩm thất bại";
}
?>