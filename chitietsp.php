<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#chitietsanpham {
	width: 790px;
	border: 2px solid #690;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px;	
}
#spcungloai {
	width: 389px;
	border: 2px solid #690;
	margin-left:402px;
	border-radius: 15px;
}
#chitietgiohang {
	width: 786px;
	border: 2px solid #C00;
	border-radius: 15px;
	margin-top: 10px;
	margin-bottom: 10px;
}
#namegiohang {
	font-size: 22px;
	font-weight: bolder;
	color: #C00;
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #C00;
	text-align: center;
}
#showspcungcl {
	width: 100%;
	text-align: center;
}
#namespcungcl {
	font-size: 20px;
	font-weight: bolder;
	color: #C00;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #C00;
	text-align: center;
	
}
#showgiohang {
	width: 100%;
}
#namespcungloai {
	font-size: 20px;
	font-weight: bolder;
	color: #690;
	text-align: center;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	
	float: left;	
	width: 389px;
	border: 2px;
	border-radius: 15px;
}

#namechitietsp {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 20px;
	font-weight: bolder;
	text-align: center;
	color: #690;
	float:left;
}

#showchitietsp {
	width: 100%;
	text-align: center;
}

.mota {
	width: 100%;
	font-size: 20px;
	font-weight: bolder;
	color: #690;
}
#showspcungloai {
	width: 100%;
	margin-top: 10px;
	margin-bottom: 10px;
	
}
#showspcungloaidc {
	width: 100%;
	margin-top: 10px;
	margin-bottom: 10px;
	
}
#spcungcl {
	float: left;	
	width: 389px;
	border: 2px solid #C00;
	border-radius: 15px;
}
#showspcungloai {
	width: 100%;
	text-align: left;
	float:left;
}
#trangsp {
	margin: auto;
	width: 730px;
}



-->
</style>
</head>
<script type="text/javascript">
function kiemtrahangton()
{
	var soluonghangton=parseInt(document.getElementById("soluongtonkho").value);
	if (soluonghangton>0)
	{
		$("#butdatmua").removeAttr("disabled");
	}
}

function kiemtrasoluong1()
{
	var soluong=parseInt(document.getElementById("soluong").value);
	var soluongtonkho=parseInt(document.getElementById("soluongtonkho").value);
	if (soluong>soluongtonkho)
	{
		alert("Xin khách hàng thông cảm! Số lượng khách đặt mua lớn hơn số lượng hàng chúng tôi đang có ");
		soluong.focus();
		return false;
	}
	
	if (soluong=="")
	{
		alert("Số lượng mua không thể để trống");
		soluong.focus();
		return false;
	}
	
	if (soluong==0)
	{
		alert("Số lượng mua không được bằng 0");
		soluong.focus();
		return false;
	}
	
	if (soluong<0)
	{
		alert("Số lượng mua không được nhỏ hơn 0");
		soluong.focus();
		return false;
	}
	
	if (isNaN(soluong))
	{
		alert("Số lượng mua chỉ được nhập số");
		soluong.focus();
		return false;
	}
	document.formdatmua.submit();
}
</script>
<body>
<div id="trangsp">
<div id="chitietsanpham">
	<div id="namechitietsp">
    
    <?php
	include ("connect.php");
	
	if (isset ($_GET['idSP']))
	{
		$idSP=$_GET['idSP'];
		$sltangxem="update sanpham set SoLanXem=SoLanXem+1 where idSP='$idSP'";
		mysql_query($sltangxem);
	}
	
	$sldc="select * from sanpham where idSP='$idSP'";
	$qrdc=mysql_query($sldc);
	if ($rowdc=mysql_fetch_array($qrdc))
	echo $rowdc['TenSP'];
	?>
    </div>
    <div id="showchitietsp">
    <form id="formdatmua" name="formdatmua" method="post" action="" >
    <input type="hidden" id="idSP" name="idSP" value="<?php echo $rowdc['idSP']; ?>" />
    <input type="hidden" id="soluongtonkho" name="soluongtonkho" value="<?php echo $rowdc['SoLuongTonKho']; ?>" />
    <table width="790" border="1" cellspacing="0" cellpadding="0" bordercolor="#669900">
  <tr>
    <td width="290" rowspan="4" align="center" valign="middle"><img src="images/<?php echo $rowdc['UrlHinh']; ?>" width="290" height="290" /></td>
    <td width="250"><p style="color:#C00">Trạng thái:</p> <?php
								if ($rowdc['SoLuongTonKho']>0)
								{
									echo "<b>Còn hàng</b>";
								}
								if ($rowdc['SoLuongTonKho']==0)
								{
									echo "<b>Hết hàng</b>";
								}
								?></td>
    <td width="250"><p style="color:#C00">Chủng loại:</p> <?php
								$slcl="select * from chungloaisanpham where idCL=".$rowdc['idCL'];
								$qrcl=mysql_query($slcl);
								if ($rowcl=mysql_fetch_array($qrcl))
								{
									echo "<b>".$rowcl['TenCL']."</b>";
								}
    							?></td>
  </tr>
  <tr>
    <td><p style="color:#C00">Giá:</p> <?php
			echo "<b>".number_format($rowdc['Gia'],2,",",".")."</b>"." VNĐ";
			?></td>
    <td><p style="color:#C00">Loại:</p><?php
				$sll="select * from loaisanpham where idLoai=".$rowdc['idLoai'];
				$qrl=mysql_query($sll);
				if ($rowl=mysql_fetch_array($qrl))
				{
					echo "<b>".$rowl['TenLoai']."</b>";
				}
    		?></td>
  </tr>
  <tr>
    <td align="right"><p style="color:#C00">Số lượng đặt mua:</p></td>
    <td><input type="text" name="soluong" id="soluong" value="1" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="button" name="butdatmua" id="butdatmua" value="Đặt mua" onclick="kiemtrasoluong1()" <?php if ($rowdc['SoLuongTonKho']==0) echo "disabled='disabled'"; else echo ""; ?> /></td>
    </tr>
  <tr>
    <td colspan="3" class="mota">Mô tả sản phẩm</td>
    </tr>
    <tr>
    <td colspan="3"><?php echo $rowdc['MoTa']; ?></td>
    </tr>
  
</table>
</form>
    </div>
    
    <div id="chitietgiohang">
    	<div id="namegiohang">
        Chi Tiết Giỏ Hàng
    </div>
        <div id="showgiohang">
        <?php
		if (isset($_POST["idSP"])) {
	$kt=0;// Kiểm tra mã sản phẩm có trong Session giỏ hàng chưa ???
	for($i=0;$i<count($_SESSION["giohang"]);$i++){
		//Nếu có mã sản phẩm trong Session giỏ hàng thì cập nhật số lượng của mã sản phẩm này
		if ($_POST["idSP"]==$_SESSION["giohang"][$i]["idSP"]){
			$kt=1;
			$_SESSION["giohang"][$i]["soluong"]+=$_POST["soluong"];
			break;
			}
	}
	//Chưa có sản phẩm này trong session thì lấy thông tin của sản phẩm đưa vào session giỏ hàng
	if ($kt==0){
	$idDC=$_POST["idSP"];
	$sql="select * from sanpham where idSP='$idSP'";
	$result=mysql_query($sql);
	if (mysql_num_rows($result)>0){
		$row=mysql_fetch_array($result);
		$sl=count($_SESSION["giohang"]);//Tăng số đồ chơi lưu trong session giỏ hàng
		
		$_SESSION["giohang"][$sl]["idSP"]=$row["idSP"];
		$_SESSION["giohang"][$sl]["TenSP"]=$row["TenSP"];
		$_SESSION["giohang"][$sl]["Gia"]=$row["Gia"];
		$_SESSION["giohang"][$sl]["soluong"]=$_POST["soluong"];
	}
	}
}
if (isset($_SESSION["giohang"]) && count($_SESSION["giohang"])>0) 
		{
		?>
        <form id="formgiohang" name="formgiohang" method="post" action="xuly_giohang.php">
        <table width="786" border="1" cellspacing="0" cellpadding="0" bordercolor="#CC0000">
  <tr>
    <td width="49" align="center">STT</td>
    <td width="256" align="center">Tên sản phẩm</td>
    <td width="111" align="center">Giá</td>
    <td width="120" align="center">Số lượng</td>
    <td width="121" align="center">Thành tiền</td>
    <td width="115" align="center">Xóa</td>
  </tr>
  <?php
	$tong=0;

	for($i=0;$i<count($_SESSION["giohang"]);$i++) 
	{
  ?>
  <tr>
    <td align="center"><?php echo $i+1; ?></td>
    <td><?php echo $_SESSION["giohang"][$i]["TenSP"]; ?></td>
    <td align="center"><?php echo number_format($_SESSION["giohang"][$i]["Gia"],2,",","."); ?></td>
    <td align="center"><?php echo $_SESSION["giohang"][$i]["soluong"]; ?></td>
    <td align="center"><?php echo number_format($_SESSION["giohang"][$i]["Gia"]*$_SESSION["giohang"][$i]["soluong"],2,",","."); ?></td>
    <td align="center"><a href="xuly_xoasession.php?thutu=<?php echo $i; ?>">Xóa</a></td>
  </tr>
  <?php
  $tong=$tong+$_SESSION["giohang"][$i]["Gia"]*$_SESSION["giohang"][$i]["soluong"];
	}
  ?>
  <tr>
    <td colspan="5" align="right">Tổng cộng tiền:</td>
    <td><?php echo number_format($tong,2,",","."); ?></td>
  </tr>
  <tr>
    <td colspan="6" align="left">
    <?php
	if (isset ($_SESSION['dangnhap']['idtendangnhap']))
	{
		$slkh="select * from users where idUser=".$_SESSION['dangnhap']['idtendangnhap'];
		$qrkh=mysql_query($slkh);
		if ($rowkh=mysql_fetch_array($qrkh))
		{							 
	?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td colspan="2" align="center"><p style="color:#06F"><b>Thông tin khách hàng và nhận hàng</b></p></td>
    </tr>
  <tr>
    <td width="19%">Tên khách hàng:</td>
    <td width="81%"><input name="tenkhachhanggiohang" type="text" id="tenkhachhanggiohang" size="40" value="<?php echo $rowkh['HoVaTen']; ?>" /></td>
  </tr>
  <tr>
    <td>Số CMND:</td>
    <td><input type="text" name="socmndgiohang" id="socmndgiohang" value="<?php echo $rowkh['SoCMND']; ?>" /></td>
  </tr>
  <tr>
    <td>Số điện thoại:</td>
    <td><input type="text" name="dienthoaigiohang" id="dienthoaigiohang" value="<?php echo $rowkh['SoDT']; ?>" /></td>
  </tr>
  <tr>
    <td>Địa chỉ:</td>
    <td><input name="diachigiohang" type="text" id="diachigiohang" size="50" value="<?php echo $rowkh['DiaChi']; ?>" /></td>
  </tr>
  <tr>
    <td>Quận / Huyện</td>
    <td>
      <select name="quanhuyengiohang" id="quanhuyengiohang">
      <?php
	  $slqh="select * from quanhuyen";
	  $qrqh=mysql_query($slqh);
	  while ($rowqh=mysql_fetch_array($qrqh))
	  {
      ?>
      <option value="<?php echo $rowqh['TenQuanHuyen']; ?>" <?php if ($rowqh['TenQuanHuyen']==$rowkh['TinhThanh']) echo "selected='selected'"; ?>><?php echo $rowqh['TenQuanHuyen']; ?></option>
      <?php
	  }
	  ?>
      </select></td>
  </tr>
  <tr>
    <td width="19%" valign="top">Thông tin khác:</td>
    <td width="81%">
    <p style="color:#06F">Nếu biểu mẫu đơn đặt hàng của chúng tôi không đủ để ghi các thông tin cần thiết về các sản phẩm, quý khách có thể nhập các thông tin thêm vào ô thông tin ở đây để chúng tôi phục vụ tốt hơn</p>
    <textarea name="thongtinkhac" id="thongtinkhac" cols="70" rows="5"></textarea>
    </td>
  </tr>
</table>
<?php
		}
	}
	else
	{
?>

	<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td colspan="2" align="center"><p style="color:#06F"><b>Thông tin khách hàng và nhận hàng</b></p></td>
    </tr>
  <tr>
    <td width="19%">Tên khách hàng:</td>
    <td width="81%"><input name="tenkhachhanggiohang" type="text" id="tenkhachhanggiohang" size="40" /></td>
  </tr>
  <tr>
    <td>Số CMND:</td>
    <td><input type="text" name="socmndgiohang" id="socmndgiohang" /></td>
  </tr>
  <tr>
    <td>Số điện thoại:</td>
    <td><input type="text" name="dienthoaigiohang" id="dienthoaigiohang" /></td>
  </tr>
  <tr>
    <td>Địa chỉ:</td>
    <td><input name="diachigiohang" type="text" id="diachigiohang" size="50" /></td>
  </tr>
  <tr>
    <td>Quận / Huyện</td>
    <td>
      <select name="quanhuyengiohang" id="quanhuyengiohang">
      <?php
	  $slqh="select * from quanhuyen";
	  $qrqh=mysql_query($slqh);
	  while ($rowqh=mysql_fetch_array($qrqh))
	  {
      ?>
      <option value="<?php echo $rowqh['TenQuanHuyen']; ?>"><?php echo $rowqh['TenQuanHuyen']; ?></option>
      <?php
	  }
	  ?>
      </select></td>
  </tr>
  <tr>
    <td width="19%" valign="top">Thông tin khác:</td>
    <td width="81%">
    <p style="color:#06F">Nếu biểu mẫu đơn đặt hàng của chúng tôi không đủ để ghi các thông tin cần thiết về các sản phẩm, quý khách có thể nhập các thông tin thêm vào ô thông tin ở đây để chúng tôi phục vụ tốt hơn</p>
    <textarea name="thongtinkhac" id="thongtinkhac" cols="70" rows="5"></textarea>
    </td>
  </tr>
</table>

<?php
	}
?>
    </td>
    </tr>
</table><input type="hidden" id="ngaydathang" name="ngaydathang" value="<?php echo date("Y-m-d:m:s",time ()) ?>" />
<p align="center"><input type="submit" name="guidonhang" id="guidonhang" value="Gửi Đơn Hàng" /></p>
        </form>
        <?php
		}
		else
		{
		?>
        Giỏ hàng trống. Khách hàng chưa chọn sản phẩm nào để mua.
        <?php
		}
		?>
        </div>
	</div>
    
</div>  
    <div id="showspcungloai">
    	<div id="spcungcl">
        	<div id="namespcungcl">Sản phẩm cùng chủng loại</div>
            <div id="showspcungcl">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <?php
			$sldc2="select * from dochoi where idCL=".$rowdc['idCL']." limit 0,10";
			$qrdc2=mysql_query($sldc2);
			while (@$rowdc2=mysql_fetch_array($qrdc2))
			{
			?>
  			<tr>
    			<td><a href="index.php?link=sanpham&idSP=<?php echo $rowdc2['idSP']; ?>"><img src="images/<?php echo $rowdc2['UrlHinh']; ?>" width="40" height="40" /><?php echo " ".$rowdc2['TenSP']."<br>"; echo " "."Giá: ".number_format($rowdc2['Gia'],2,",","."); ?></a></td>
  			</tr>
            <?php
			}
			?>
			</table>     
            </div>
      </div>
    <div id="spcungloai">
        	<div id="namespcungloai">Sản phẩm cùng loại</div>
        <div id="showspcungloaidc">
		<table width="100%" border="0" cellspacing="2" cellpadding="1">
          <?php
			$sldc3="select * from sanpham where idLoai=".$rowdc['idLoai']." limit 0,10";
			$qrdc3=mysql_query($sldc3);
			while ($rowdc3=mysql_fetch_array($qrdc3))
			{
			?>
		  <tr>
   			  <td width="50"><a href="index.php?link=sanpham&idSP=<?php echo $rowdc3['idSP']; ?>"><img src="images/<?php echo $rowdc3['UrlHinh']; ?>" width="40" height="40" /></a></td>
			  <td><a href="index.php?link=sanpham&idSP=<?php echo $rowdc3['idSP']; ?>">
				<?php echo " ".$rowdc3['TenSP']."<br>"; echo " "."Giá: ".number_format($rowdc3['Gia'],2,",","."); ?></a>
			  </td>
		  </tr>
          <?php
			}
			?>
		  </table>
        </div>
      </div>
</div>
</div>
</body>
</html>