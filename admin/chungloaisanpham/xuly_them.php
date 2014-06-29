<?php ob_start();
$sl="insert into chungloaidochoi (`TenCL`,`AnHien`) value ('".$_POST['tenchungloai']."','".$_POST['anhien']."')";
if (mysql_query($sl))
{
	header ("location:index.php?link=quanlychungloai");
}
else
	echo "Thêm Chủng Loại Đồ Chơi thất bại";
?>