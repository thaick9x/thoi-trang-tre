
<style type="text/css">
<!--
#spbanchay {
	width: 790px;
	border: 2px solid #690;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px
}
#namespbanchay {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #690;
}
#showspbanchay {
	width: 100%;
}
#indexcontent {
	margin: auto;
	width: 730px;
}

#spxemnhieu {
	width: 790px;
	border: 2px solid #C00;
	margin-top: 10px;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px
}

#namespxemnhieu {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #C00;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #C00;
}

#showspxemnhieu {
	width: 100%;
}
-->
</style>
<div id="indexcontent">
	<div id="spbanchay">
		<div id="namespbanchay">Kết quả tìm kiếm</div>
    	<div id="showspbanchay">
        <table cellpadding="7" cellspacing="7" width="790" border="1" bordercolor="#669900">
        <?php
		include ("connect.php");
		if (isset ($_POST['txttimkiem']))
		{
			$txttimkiem=$_POST['txttimkiem'];
		}
		
		$sl="select * from sanpham where TenSP like '%".$txttimkiem."%'";
		$qr=mysql_query($sl);
		$tsd=mysql_num_rows($qr);
		$sc=5;
		$sd=100*$sc;
		$tst=ceil($tsd/$sd);
		
		if (isset ($_GET['trang']))
		$trang=intval($_GET['trang']);
		else 
		$trang=1;
		
		$vitri=($trang-1)*$sd;
		$sl2="select * from sanpham where TenSP like '%".$txttimkiem."%' limit $vitri,$sd";
		$qr2=mysql_query($sl2);
		while ($row2=mysql_fetch_array($qr2))
		{
		?>
        <tr>
  <td width="140" valign="middle" align="center">
            	<p><a href="index.php?link=timkiem&idSP=<?php echo $row2['idSP']; ?>"><img src="images/<?php echo $row2['UrlHinh'];?>" width="100" height="100" /></a></p>
            	<p><b><?php echo $row2['TenSP']; ?></b></p>
            	<p style="color:#F00">Giá:<?php echo number_format($row2['Gia'],2,",",".");?></p>
                <a href="index.php?link=timkiem&idSP=<?php echo $row2['idSP']; ?>">Xem chi tiết</a>
            </td>
            <?php
			for ($i=1;$i<$sc;$i++)
			{
				if ($row2=mysql_fetch_array($qr2))
				{
			?>
  <td width="140" valign="middle" align="center">
            	<p><a href="index.php?link=timkiem&idSP=<?php echo $row2['idSP']; ?>"><img src="images/<?php echo $row2['UrlHinh'];?>" width="100" height="100" /></a></p>
            	<p><b><?php echo $row2['TenSP']; ?></b></p>
            	<p style="color:#F00">Giá:<?php echo number_format($row2['Gia'],2,",",".");?></p>
                <a href="index.php?link=timkiem&idDC=<?php echo $row2['idSP']; ?>">Xem chi tiết</a>
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
        
        </div>
	</div>
  
</div>

