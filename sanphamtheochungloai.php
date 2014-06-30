<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#sanphamtheochungloai {
	width: 790px;
	border: 2px solid #690;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px;
	
}

#namesanphamtheochungloai {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #690;
}

#contentsptcl {
	width: 100%;
}
#trangchungloaisp {
	margin: auto;
	width: 730px;
}
-->
</style>
</head>

<body>
<div id="trangchungloaisp">
<?php
include ("connect.php");

if (isset ($_GET['idCL']))
{
$idCL=$_GET['idCL'];
}
$slcl="select * from chungloaisanpham where idCL='$idCL'";
$qrcl=mysql_query($slcl);
?>
<div id="sanphamtheochungloai">
	<div id="namesanphamtheochungloai"><?php if ($rowcl=mysql_fetch_array($qrcl)) echo $rowcl['TenCL']; ?></div>
    <div id="contentsptcl">
    <table cellpadding="7" cellspacing="7" width="790" border="1" bordercolor="#669900">
        <?php
		$sl="select * from sanpham where idCL=".$rowcl['idCL'];
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
		$sl2="select * from sanpham where idCL=".$rowcl['idCL']." limit $vitri,$sd";
		$qr2=mysql_query($sl2);
		while ($row2=mysql_fetch_array($qr2))
		{
		?>
        <tr>
<td width="140" valign="middle" align="center">
            	<p><a href="index.php?link=sanpham&idSP=<?php echo $row2['idSP']; ?>"><img src="images/<?php echo $row2['UrlHinh'];?>" width="100" height="100" /></a></p>
            	<p><b><?php echo $row2['TenSP']; ?></b></p>
            	<p style="color:#F00">Giá:<?php echo number_format($row2['Gia'],2,",",".");?></p>
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
            	<p style="color:#F00">Giá:<?php echo number_format($row2['Gia'],2,",",".");?></p>
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
		echo "<a href='index.php?link=chungloaisp&idCL=".$_GET['idCL']."&trang=".$i."'.>".$i." "."</a>";
	}
?></p>
        
    </div>
</div>
</div>
</body>
</html>