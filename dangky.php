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
	margin-left: 35px;
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
-->
</style>
<script src="jquery/jquery-1.8.0.js"></script>
</head>

<body>
<div id="dangky">
	<div id="namedangky">Đăng Ký Khách Hàng</div>
    <div id="contentdangky">
    <form id="formdangky" name="formdangky" method="post" action="xuly_dangky.php" onsubmit="return kiemtradangky(an1, an2, an3, an4, an5, an6, an7, an8)" >
    <script type="text/javascript">
	$(document).ready(function(){
	$("#tendangnhap").blur(function(){
		$.ajax({
			  type:"POST",
			  url:"xuly_tendangnhap.php",
			  data:"tendangnhap="+$("#tendangnhap").val(),
			  success:function(bien1){
				  if (bien1==0)
				  {
				  	$("#ketquatendangnhap").html("<div class='khonghople'>Tên đăng nhập đã tồn tại</div>");
					document.getElementById('an1').value="0";
				  }
				  
				  else if (bien1==2)
				  {
					$("#ketquatendangnhap").html("<div class='khonghople'>Tên đăng nhập không thể để trống</div>");
					document.getElementById('an1').value="0";
				  }
				 
				  
				  else if (bien1==1)
				  {
					  $("#ketquatendangnhap").html("<div class='hople'>Có thể sử dụng tên đăng nhập này</div>");
					  document.getElementById('an1').value="1";
					  $("#butdangky").removeAttr("disabled");
				  }
				  
				  else if (bien1==3)
				  {
					  $("#ketquatendangnhap").html("<div class='khonghople'>Tên đăng nhập phải lớn hơn 8 kí tự</div>");
					  document.getElementById('an1').value="0";
				  }
			  }
		});
	});						   
});
	
	function kiemtramatkhau(pass)
{
	if (pass=="")
	{
		document.getElementById('ketquamatkhau').innerHTML="<div class='khonghople'>Mật khẩu không được để trống</div>";
		document.getElementById('an2').value="0";
	}
	else { 
	if (pass.length<6)
	{
		document.getElementById('ketquamatkhau').innerHTML="<div class='khonghople'>Mật khẩu phải lớn hơn 6 kí tự</div>";
		document.getElementById('an2').value="0";
	}
	else 
		document.getElementById('ketquamatkhau').innerHTML="<div class='hople'>Mật khẩu hợp lệ</div>";
		document.getElementById('an2').value="1";
	}
}

function ktnhaplaimatkhau(pass,repass)
{
	if (repass.length==0)
	{
		document.getElementById('ketquanhaplaimk').innerHTML="<div class='khonghople'>Nhập lại mật khẩu không được để trống</div>";
		document.getElementById('an3').value="0";
	}
	else if (pass != repass)
	{
		document.getElementById('ketquanhaplaimk').innerHTML="<div class='khonghople'>Nhập lại mật khẩu phải trừng với mật khẩu</div>";
		document.getElementById('an3').value="0";
	}
	else
	{
		document.getElementById('ketquanhaplaimk').innerHTML="<div class='hople'>Nhập lại mật khẩu hợp lệ</div>";
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
    <table width="790" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="205" class="muclon">Thông tin tài khoản:</td>
    <td width="316">&nbsp;</td>
    <td width="269">&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Tên đăng nhập:</td>
    <td><input type="text" name="tendangnhap" id="tendangnhap" maxlength="22" /><input type="hidden" id="an1" name="an1" />
    *</td>
    <td><div id="ketquatendangnhap"></div></td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Mật khẩu:</td>
    <td><input type="password" name="matkhau" id="matkhau" onblur="kiemtramatkhau(this.value)" /><input type="hidden" id="an2" name="an2" />
    *</td>
    <td><div id="ketquamatkhau"></div></td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Nhập lại mật khẩu:</td>
    <td><input type="password" name="nhaplaimatkhau" id="nhaplaimatkhau" onblur="ktnhaplaimatkhau(matkhau.value,nhaplaimatkhau.value)" /><input type="hidden" id="an3" name="an3" />
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
    <td><input name="hovaten" type="text" id="hovaten" size="40" onblur="kiemtrahovaten(this.value)" /><input type="hidden" id="an4" name="an4" />
    *</td>
    <td><div id="ketquahovaten"></div></td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Giới tính:</td>
    <td><select name="gioitinh" id="gioitinh">
    <option value="Nam">Nam</option>
    <option value="Nữ">Nữ</option>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Ngày sinh:</td>
    <td><input type="text" name="ngaysinh" id="ngaysinh" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Địa chỉ</td>
    <td><input name="diachi" type="text" id="diachi" size="50" onblur="kiemtradiachi(this.value)" /><input type="hidden" id="an5" name="an5" />*</td>
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
    <option value="<?php echo $rowqh['TenQuanHuyen']; ?>"><?php echo $rowqh['TenQuanHuyen']; ?></option>
    <?php
	}
	?>
    </select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Số điện thoại:</td>
    <td><input type="text" name="sodienthoai" id="sodienthoai" onblur="kiemtradienthoai(this.value)" /><input type="hidden" id="an6" name="an6" />
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
    <td><input type="text" name="socmnd" id="socmnd" onblur="kiemtracmnd(this.value)" /><input type="hidden" id="an7" name="an7" />
    *</td>
    <td><div id="ketquacmnd"></div></td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Ngày cấp:</td>
    <td><input type="text" name="ngaycapcmnd" id="ngaycapcmnd" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right" class="mucnho">Nơi cấp:</td>
    <td><input type="text" name="noicapcmnd" id="noicapcmnd" /></td>
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
      <input type="submit" name="butdangky" id="butdangky" value="Đăng ký" disabled="disabled" />
      <input type="reset" name="butcancel" id="butcancel" value="Hủy" /></td>
    </tr>
</table>
</form>
    </div>
</div>
</body>
</html>