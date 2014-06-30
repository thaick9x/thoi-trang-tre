
<style type="text/css">
<!--
#spmoinhat {
	width: 790px;
	border: 2px solid #03F;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px;
	margin-bottom: 10px;
	
}

#namespmoinhat {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #03F;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #03F;
}

#showspmoinhat {
	width: 100%;
}

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
	<div id="spmoinhat">
		<div id="namespmoinhat">Top 10 Sản Phẩm Mới Nhất</div>
   	  <div id="showspmoinhat">
        <table cellpadding="7" cellspacing="7" width="790" border="1" bordercolor="#0033FF">
        <?php
		include ("connect.php");
		$sl="select * from sanpham";
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
		$sl2="select * from sanpham order by NgayCapNhat DESC limit $vitri,$sd";
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
        </div>
	</div>


<div id="spbanchay">
		<div id="namespbanchay">Top 20 Sản Phẩm Bán Chạy Nhất</div>
    	<div id="showspbanchay">
        <table cellpadding="7" cellspacing="7" width="790" border="1" bordercolor="#669900">
        <?php
		$sl="select * from sanpham";
		$qr=mysql_query($sl);
		$tsd=mysql_num_rows($qr);
		$sc=5;
		$sd=4*$sc;
		$tst=ceil($tsd/$sd);
		
		if (isset ($_GET['trang']))
		$trang=intval($_GET['trang']);
		else 
		$trang=1;
		
		$vitri=($trang-1)*$sd;
		$sl2="select * from sanpham order by SoLuongDaBan DESC limit $vitri,$sd";
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
        </div>
	</div>

	<div id="spxemnhieu">
	  <div id="namespxemnhieu">Top 20 Sản Phẩm Xem Nhiều Nhất</div>
    	<div id="showspxemnhieu">
        <table cellpadding="7" cellspacing="7" width="790" border="1" bordercolor="#CC0000">
        <?php
		$sl3="select * from sanpham";
		$qr3=mysql_query($sl3);
		$tsd3=mysql_num_rows($qr3);
		$sc3=5;
		$sd3=4*$sc;
		$tst3=ceil($tsd3/$sd3);
		
		if (isset ($_GET['trang']))
		$trang3=intval($_GET['trang']);
		else 
		$trang3=1;
		
		$vitri3=($trang3-1)*$sd3;
		$sl4="select * from sanpham order by SoLanXem DESC limit $vitri3,$sd3";
		$qr4=mysql_query($sl4);
		while ($row4=mysql_fetch_array($qr4))
		{
		?>
        <tr>
  <td width="140" valign="middle" align="center">
            	<p><a href="index.php?link=sanpham&idSP=<?php echo $row4['idSP']; ?>"><img src="images/<?php echo $row4['UrlHinh'];?>" width="100" height="100" /></a></p>
            	<p><b><?php echo $row4['TenSP']; ?></b></p>
            	<p style="color:#F00">Giá:<?php echo number_format($row4['Gia'],0,",",".")." VNĐ";?></p>
                <a href="index.php?link=sanpham&idSP=<?php echo $row4['idSP']; ?>">Xem chi tiết</a>
            </td>
            <?php
			for ($i=1;$i<$sc;$i++)
			{
				if ($row4=mysql_fetch_array($qr4))
				{
			?>
  <td width="140" valign="middle" align="center">
            	<p><a href="index.php?link=sanpham&idSP=<?php echo $row4['idSP']; ?>"><img src="images/<?php echo $row4['UrlHinh'];?>" width="100" height="100" /></a></p>
            	<p><b><?php echo $row4['TenSP']; ?></b></p>
            	<p style="color:#F00">Giá:<?php echo number_format($row4['Gia'],0,",",".")." VNĐ";?></p>
                <a href="index.php?link=sanpham&idSP=<?php echo $row4['idSP']; ?>">Xem chi tiết</a>
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

