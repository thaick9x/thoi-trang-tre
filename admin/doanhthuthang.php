<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Doanh Thu Theo Tháng</b></p>
<table border="1" cellpadding="1" cellspacing="1" align="center" width="250" bordercolor="#0066FF">
<tr>
	<td align="center"><p style="color:#F00">Doanh Thu Tháng</p></td>
    <td align="center"><p style="color:#F00">Tổng</p></td>
    <td align="center"><p style="color:#F00">Thêm</p></td>
</tr>
<?php
require_once '../connect.php';
for($i=1;$i<13;$i++)
{
	$sl="select SUM(gia),ThangXuatHD from chitiethoadon where ThangXuatHD = ".$i."";
	$qr=mysql_query($sl);
	while ($row=mysql_fetch_array($qr))
	{
		if($row[0]>0)
		{
			?>
			<tr>
				<td align="center"><?php echo $row['ThangXuatHD']; ?></td>
				<td align="center"><?php echo $row['SUM(gia)']; ?></td>
				<td align="center"><a href="index.php?link=suasanpham">Thêm</a></td>
			</tr>
			<?php
		}
	}
}
?>
</table>
</body>
</html>