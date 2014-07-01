<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#sanphamtheoloai {
	width: 790px;
	border: 2px solid #690;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px;
	
}

#namesanphamtheoloai {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #690;
}

#contentsptl {
	width: 100%;
}
#trangloaisp {
	margin: auto;
	width: 730px;
}
-->
</style>
</head>

<body>
<div id="trangloaisp">
<?php
include ("connect.php");

if (isset ($_GET['idLoai']))
{
$idLoai=$_GET['idLoai'];
}
$sll="select * from loaisanpham where idLoai='$idLoai'";
$qrl=mysql_query($sll);
?>
<div id="sanphamtheoloai">
	<div id="namesanphamtheoloai"><?php if ($rowl=mysql_fetch_array($qrl)) echo $rowl['TenLoai']; ?></div>
    <div id="contentsptl">
    <table cellpadding="7" cellspacing="7" width="790" border="1" bordercolor="#669900">
        <?php
		$sl="select * from sanpham where idLoai=".$rowl['idLoai'];
		$qr=mysql_query($sl);
		$tsd=mysql_num_rows($qr);
		$sc=5;
		$sd=2*$sc;
		$tst=ceil($tsd/$sd);
		
		if (isset ($_GET['trang']))
		$trang=intval($_GET['trang']);
		else 
		$trang=1;
		
		$vitri=($trang-1)*$sd;
		$sl2="select * from sanpham where idLoai=".$rowl['idLoai']." limit $vitri,$sd";
		$qr2=mysql_query($sl2);
		while ($row2=mysql_fetch_array($qr2))
		{
		?>
        <tr>
  <td width="140" valign="middle" align="center">
            	<p><a href="index.php?link=sanpham&idSP=<?php echo $row2['idSP']; ?>"><img src="images/<?php echo $row2['UrlHinh'];?>" width="100" height="100" /></a></p>
            	<p><b><?php echo $row2['TenSP']; ?></b></p>
            	<p style="color:#F00">Giá:<?php echo number_format($row2['Gia'],0,",",".")." VNĐ";?></p>
                <a href="index.php?link=sanpham&idSP=<?php echo $row2['idSP']; ?>">Xem chi tiết</a>
            </td>
            <?php
			for ($i=1;$i<$sc;$i++)
			{
				if ($row2=mysql_fetch_array($qr2))
				{
			?>
  <td width="140" valign="middle" align="center">
            	<p><a href="index.php?link=sanpham&idSP=<?php echo $row2['idSP']; ?>"><img src="images/<?php echo $row2['UrlHinh'];?>" width="100" height="100" /></a></p>
            	<p><b><?php echo $row2['TenSP']; ?></b></p>
            	<p style="color:#F00">Giá:<?php echo number_format($row2['Gia'],0,",",".")." VNĐ";?></p>
                <a href="index.php?link=sanpham&idSP=<?php echo $row2['idSP']; ?>">Xem chi tiết</a>
            </td>
            <?php
				}
			}
			?>
        </tr>
        <?php
		}
		?>
        </table>
        
        <p align="right"><?php
	$i=1;
	echo "Trang";
	for ($i=1;$i<=$tst;$i++)
	{
		if ($i==$trang)
		echo "<b><font size='5'; color='blue'>".$i."</font></b>";
		else
		echo "<a href='index.php?link=loaisp&idLoai=".$_GET['idLoai']."&trang=".$i."'.>".$i." "."</a>";
	}
?></p>
        
    </div>
</div>
</div>

</body>
</html>