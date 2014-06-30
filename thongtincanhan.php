<?php
$chuoi= array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','0','1','2','3','4','5','6','7','8','9');
$tam=count ($chuoi)-1; // 36 - 1 = 35
$giatri="";
$i=0;
$giatri="";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
#dangky {
	width: 790px;
	border: 2px solid #690;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px;
	
}
.khonghople {
	font-weight: bolder;
	color: #F00;
}
.hople {
	font-weight: bolder;
	color: #0F0;
}

#namedangky {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #690;
}

#contentdangky {
	width: 100%;
}
.muclon {
	font-size: 18px;
	font-weight: bolder;
	color: #00F;
	padding-left: 5px;
}
.mucnho {
	font-weight: bolder;
	color: #C00;
}

#namelichsumuasam {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #690;
}

#contentlichsumuasam {
	width: 100%;
}
#trangthongtincanhan {
	margin: auto;
	width: 730px;
}
-->
</style>
<script src="jquery/jquery-1.8.0.js"></script>
</head>

<body>
<div id="trangthongtincanhan">
<div id="dangky">
	<div id="namedangky">Thông tin cá nhân</div>
    <div id="contentdangky">
    <form id="formdangky" name="formdangky" method="post" action="xuly_dangky.php" onsubmit="return kiemtradangky(an1, an2, an3, an4, an5, an6, an7, an8)" >
    <script type="text/javascript">
	
function kiemtramatkhaucu(pass,an9)
{
	if (pass=="")
	{
		document.getElementById('ketquamatkhau').innerHTML="<div class='khonghople'>Mật khẩu cũ không được để trống</div>";
		document.getElementById('an2').value="0";
	}
	else { 
	if (pass.length<6)
	{
		document.getElementById('ketquamatkhau').innerHTML="<div class='khonghople'>Mật khẩu cũ phải lớn hơn 6 kí tự</div>";
		document.getElementById('an2').value="0";
	}
	else if (pass!=an9)
	{
		document.getElementById('ketquamatkhau').innerHTML="<div class='khonghople'>Mật khẩu cũ phải trùng với mật khẩu khách hàng sử dụng</div>";
		document.getElementById('an2').value="0";
	}
	
	else
	}
		document.getElementById('ketquamatkhau').innerHTML="<div class='hople'>Mật khẩu cũ hợp lệ</div>";
		document.getElementById('an2').value="1";
		 $("#butdangky").removeAttr("disabled");
	}
}

function ktmatkhaumoi(passmoi)
{
	if (passmoi.length==0)
	{
		document.getElementById('ketquanhaplaimk').innerHTML="<div class='khonghople'>Mật khẩu mới không được để trống</div>";
		document.getElementById('an3').value="0";
	}
	else if (passmoi.length<6)
	{
		document.getElementById('ketquanhaplaimk').innerHTML="<div class='khonghople'>Mật khẩu mới phải lớn hơn 6 kí tự</div>";
		document.getElementById('an3').value="0";
	}
	else
	{
		document.getElementById('ketquanhaplaimk').innerHTML="<div class='hople'>Mật khẩu mới hợp lệ</div>";
		document.getElementById('an3').value="1";
	}
}

function kiemtrahovaten(hovaten)
{
	if (hovaten.length==0)
	{
		document.getElementById('ketquahovaten').innerHTML="<div class='khonghople'>Họ và tên không được để trống</div>";
		document.getElementById('an4').value="0";
	}
	else
	{
		document.getElementById('ketquahovaten').innerHTML="<div class='hople'>Đã nhập họ và tên</div>";
		document.getElementById('an4').value="1";
	}
}

function kiemtradiachi(diachi)
{
	if (diachi.length==0)
	{
		document.getElementById('ketquadiachi').innerHTML="<div class='khonghople'>Địa chỉ không được để trống</div>";
		document.getElementById('an5').value="0";
	}
	else
	{
		document.getElementById('ketquadiachi').innerHTML="<div class='hople'>Đã nhập địa chỉ</div>";
		document.getElementById('an5').value="1";
	}
}

function kiemtradienthoai(dienthoai)
{
	if (dienthoai.length==0)
	{
		document.getElementById('ketquadienthoai').innerHTML="<div class='khonghople'>Số điện thoại không được để trống</div>";
		document.getElementById('an6').value="0";
	}
	else
	{
		document.getElementById('ketquadienthoai').innerHTML="<div class='hople'>Đã nhập số điện thoại</div>";
		document.getElementById('an6').value="1";
	}
}

function kiemtracmnd(cmnd)
{
	if (cmnd.length==0)
	{
		document.getElementById('ketquacmnd').innerHTML="<div class='khonghople'>Số CMND không được để trống</div>";
		document.getElementById('an7').value="0";
	}
	else
	{
		document.getElementById('ketquacmnd').innerHTML="<div class='hople'>Đã nhập số CMND</div>";
		document.getElementById('an7').value="1";
	}
}

function kiemtramaxacnhan(hiddenmxn,maxacnhan)
{
	if (maxacnhan.length==0)
	{
		document.getElementById('ketquamaxacnhan').innerHTML="<div class='khonghople'>Nhập mã xác nhận không được để trống</div>";
		document.getElementById('an8').value="0";
	}
	else if (hiddenmxn != maxacnhan)
	{
		document.getElementById('ketquamaxacnhan').innerHTML="<div class='khonghople'>Nhập mã xác nhận phải trừng với mã xác nhận trên</div>";
		document.getElementById('an8').value="0";
	}
	else
	{
		document.getElementById('ketquamaxacnhan').innerHTML="<div class='hople'>Nhập mã xác nhận hợp lệ</div>";
		document.getElementById('an8').value="1";
	}
}

function kiemtradangky(an1,an2,an3,an4,an5,an6,an7,an8)
{
	if (an1.value==1 && an2.value==1 && an3.value==1 && an4.value==1 && an5.value==1 && an6.value==1 && an7.value==1 && an8.value==1)
	{
		return true;
	}
	else
	{
	alert("Các thông tin khách hàng nhập chưa đầy đủ hoặc không được chấp nhận. Xin khách hàng vui lòng nhập lại");	
	return false;
	}
}
    </script>
    <?php
	if (isset ($_GET['idUser']))
	{
		$idUser=$_GET['idUser'];
	}
	
	$sluser="select * from users where idUser='$idUser'";
	$qruser=mysql_query($sluser);
	if ($rowuser=mysql_fetch_array($qruser))
	{
	?>
    <table width="790" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="205" class="muclon">Thông tin tài khoản:</td>
    <td width="316">&nbsp;</td>
    <td width="269">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Tên đăng nhập:</td>
    <td><input type="text" name="tendangnhap" id="tendangnhap" maxlength="22" disabled="disabled" value="<?php echo $rowuser['TenDangNhap']; ?>" /><input type="hidden" id="an1" name="an1" />
    *</td>
    <td><div id="ketquatendangnhap"></div></td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Mật khẩu hiện tại:</td><input type="hidden" name="an9" id="an9" value="<?php echo $rowuser['MatKhau']; ?>" />
    <td><input type="password" name="matkhau" id="matkhau" onblur="kiemtramatkhaucu(this.value,an9.value)" /><input type="hidden" id="an2" name="an2" />
    *</td>
    <td><div id="ketquamatkhau"></div></td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Mật khẩu mới:</td>
    <td><input type="password" name="nhaplaimatkhau" id="nhaplaimatkhau" onblur="ktmatkhaumoi(this.value)" /><input type="hidden" id="an3" name="an3" />
    *</td>
    <td><div id="ketquanhaplaimk"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="muclon">Thông tin cá nhân:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Họ và tên:</td>
    <td><input name="hovaten" type="text" id="hovaten" size="40" onblur="kiemtrahovaten(this.value)" value="<?php echo $rowuser['HoVaTen']; ?>" /><input type="hidden" id="an4" name="an4" />
    *</td>
    <td><div id="ketquahovaten"></div></td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Giới tính:</td>
    <td><select name="gioitinh" id="gioitinh">
    <option value="Nam" <?php if ($rowuser['GioiTinh']=="Nam") echo "selected='selected'"; ?>>Nam</option>
    <option value="Nữ" <?php if ($rowuser['GioiTinh']=="Nữ") echo "selected='selected'"; ?>>Nữ</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Ngày sinh:</td>
    <td><input type="text" name="ngaysinh" id="ngaysinh" value="<?php echo $rowuser['NgaySinh']; ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Địa chỉ</td>
    <td><input name="diachi" type="text" id="diachi" size="50" onblur="kiemtradiachi(this.value)" value="<?php echo $rowuser['DiaChi']; ?>" /><input type="hidden" id="an5" name="an5" />*</td>
    <td><div id="ketquadiachi"></div></td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Quận / Huyện:</td>
    <td><select name="tinhthanhpho" id="tinhthanhpho">
    <?php
	$slqh="select * from quanhuyen";
	$qrqh=mysql_query($slqh);
	while ($rowqh=mysql_fetch_array($qrqh))
	{
	?>
    <option value="<?php echo $rowqh['TenQuanHuyen']; ?>" <?php if ($rowuser['TinhThanh']==$rowqh['TenQuanHuyen']) echo "selected='selected'" ?>><?php echo $rowqh['TenQuanHuyen']; ?></option>
    <?php
	}
	?>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Số điện thoại:</td>
    <td><input type="text" name="sodienthoai" id="sodienthoai" onblur="kiemtradienthoai(this.value)" value="<?php echo $rowuser['SoDT'] ?>" /><input type="hidden" id="an6" name="an6" />
    *</td>
    <td><div id="ketquadienthoai"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="muclon">Thông tin chứng thực:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Số chứng minh nhân dân:</td>
    <td><input type="text" name="socmnd" id="socmnd" onblur="kiemtracmnd(this.value)" value="<?php echo $rowuser['SoCMND']; ?>" /><input type="hidden" id="an7" name="an7" />
    *</td>
    <td><div id="ketquacmnd"></div></td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Ngày cấp:</td>
    <td><input type="text" name="ngaycapcmnd" id="ngaycapcmnd" value="<?php echo $rowuser['NgayCapCMND']; ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Nơi cấp:</td>
    <td><input type="text" name="noicapcmnd" id="noicapcmnd" <?php echo $rowuser['NoiCapCMND']; ?>/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="muclon">Thông tin xác nhận:</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td class="mucnho" align="right">Mã xác nhận:</td>
    <td>
    
    <?php 
	for ($k=0;$k<=6;$k++)
		{
			$vitri=rand(0,$tam); // Random từ 0 -> 35
			$ketquachuoi=$chuoi[$vitri];
			$giatri.=$ketquachuoi;
	?>
            <img src="images_maxacnhan/<?php echo $ketquachuoi; ?>.png" width="20" />
    <?php
	}									
	?>												
    	<input type="hidden" id="hiddenmxn" name="hiddenmxn" value="<?php echo $giatri; ?>" />								
    </td>
    <td></td>
  </tr>
  <tr>
    <td class="mucnho" align="right">Nhập mã xác nhận:</td>
    <td><input type="text" name="maxacnhan" id="maxacnhan" onblur="kiemtramaxacnhan(document.formdangky.hiddenmxn.value,this.value)" /><input type="hidden" id="an8" name="an8" />
      *</td>
    <td><div id="ketquamaxacnhan"></div></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Hãy cẩn thận với những thông tin có dấu (*)!</td>
  </tr>
  <tr>
    <td colspan="3" align="center">
      <input type="submit" name="butdangky" id="butdangky" value="Sửa"  />
      <input type="reset" name="butcancel" id="butcancel" value="Hủy" /></td>
    </tr>
</table>
<?php
	}
?>
</form>
    </div>
    <br />
<div id="namelichsumuasam">Lịch Sử Mua Sắm</div>
    <div id="contentlichsumuasam">
    <table width="790" border="1" cellpadding="1" cellspacing="1" bordercolor="#669900">
    <tr>
    	<td>Mã Số Hóa Đơn</td>
        <td>Thời Gian Đặt Hàng</td>
        <td>Tên Khách Hàng</td>
        <td>Số Chứng Minh Dân Nhân</td>
        <td>Số Điện Thoại</td>
        <td>Địa Chỉ</td>
        <td>Quận Huyện</td>
        <td>Tên Sản Phẩm</td>
        <td>Số Lượng</td>
        <td>Giá</td>
    </tr>
<?php
$sllsms="select * from hoadon, chitiethoadon where hoadon.idUser='".$idUser."' and hoadon.idHoaDon=chitiethoadon.idHoaDon";
$qrlsms=mysql_query($sllsms);
while ($rowlsms=mysql_fetch_array($qrlsms))
{
?>

	<tr>
    	<td><?php echo $rowlsms['idHoaDon']; ?></td>
        <td><?php echo $rowlsms['ThoiGianDatHang'];?></td>
        <td><?php echo $rowlsms['TenKhachHang'];?></td>
        <td><?php echo $rowlsms['SoCMND'];?></td>
        <td><?php echo $rowlsms['SoDT'];?></td>
        <td><?php echo $rowlsms['DiaChi'];?></td>
        <td><?php echo $rowlsms['TenQuanHuyen'];?></td>
        <td><?php
				$sldc="select * from sanpham where idSP=".$rowlsms['idSP'];
				$qrdc=mysql_query($sldc);
				if ($rowdc=mysql_fetch_array($qrdc))
				{
				echo $rowdc['TenSP'];
				}
			?></td>
        <td><?php echo $rowlsms['SoLuong'];?></td>
        <td><?php echo $rowlsms['Gia'];?></td>
    </tr>
<?php
}
?>
	</table>
    </div>
    
    
</div>
</div>
</body>
</html>