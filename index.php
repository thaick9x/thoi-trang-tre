<?php session_start(); ob_start();
include ("connect.php");
if (!isset ($_SESSION['giohang']))
{
	$_SESSION['giohang']=array();
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang Chủ JK</title>
<style type="text/css">
<!--
#logo {
overflow: hidden;
}

#logo img {
float: left;
}

#logo form {
float: right;
}

#main_nav {
font-size: 1.2em;
background: #b4e887;
padding : 10px;
height: 25px;
width: 980px;

}

#main_nav li {
display: inline;
}

#main_nav li a {
padding: 6px;
text-decoration: none;
color: #191919;
font-weight: bold;
}

#main_nav li a:hover {
background: #ff7e00;
color: white;
text-decoration: none;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
}
#banner {
	float: left;
	margin-top:10px;
	
}
#formdangnhap {
	height: 25px;
	width: 788px;
	border: 3px solid #C00;
	text-align: center;
	vertical-align: middle;
	border-radius: 7px;
	margin-bottom: 5px;
	margin-top: 5px;
}
#right {
	
	margin-left: 20px;
	border-radius:15px;
	float: left;
}
#left {
	
	margin-left: 0px;
	
	float: left;
}
#timkiem {
	height: 80px;
	width: 800px;
	background-image: none;
	background-repeat: no-repeat;
	margin-left: 20px;
	float: left;
}
#finding {
	float: left;
	margin-top: 10px;
}
#formtimkiem {
	height: 25px;
	width: 788px;
	border: 3px solid #C00;
	margin-bottom: 35px;
	text-align: center;
	vertical-align: middle;
	border-radius: 7px;
}
#datetime {
	float: left;
	height: 55px;
	width: 180px;
	border: 4px solid #C00;
	border-radius: 15px;
	text-align: center;
	vertical-align: middle;
	padding-top: 10px;
	font-style: italic;
	font-weight: bolder;
	font-size: 18px;
}
#content {
	width: 1000px;
	float: left;
	margin-top: 10px;
}
#giohang {
	height: 70px;
	width: 175px;
	background-image: url(images_index/icon_gio_hang.png);
	background-repeat: no-repeat;
	background-position: right center;
	border: 4px solid #C00;
	border-radius: 15px;
	padding-left: 5px;
	text-align: left;
	vertical-align: middle;
}
#footer {
	background-image: url(images_index/footer_bg.png);
	background-repeat: no-repeat;
	background-position: center center;
	clear: both;
	height: 110px;
	width: 1000px;
	border: 3px solid #693;
	margin-top: 10px;
	border-radius: 15px;
	float: left;
}

body {
	margin-left: 170px;
}
-->

</style>

<script src="jquery/jquery-1.8.0.js"></script>
<script src="admin/sanpham/ckeditor/ckeditor.js"></script>
<link type="text/css" href="/menu.css" rel="stylesheet" />
 <script type="text/javascript" src="/jquery.js"></script>
 <script type="text/javascript" src="/menu.js"></script>
</head>
<body>
<div id="container">
	
	<div id="logo">
		<img src="images_index/logo.jpg" alt="Logo" />
		
	</div><!--End #logo-->
    <div id="main_nav">
		<div>
			<li><a href="index.php">Trang chủ</a></li>
			<li><a href="index.php?link=gioithieu">Giới Thiệu</a></li>
			<li><a href="index.php?link=dangky">Đăng Kí</a></li>
			<li><a href="index.php?link=lienhe">Liên Hệ</a></li>
		</div>
	</div><!--End #main_nav-->
    <div id="banner">
       <img src="images_index/banner.jpg" alt="banner" width="1000px"  />
     </div><!--End #banner-->
    <div id="finding">
   	  <div id="datetime">
        <script> 
				var mydate=new Date(); var year=mydate.getYear();   
				if (year < 1000) year+=1900;
				var day=mydate.getDay(); 
				var month=mydate.getMonth(); var daym=mydate.getDate(); 
				if (daym<10) daym="0"+daym;
				var dayarray=new Array("Chủ nhật","Thứ Hai","Thứ Ba","Thứ Tư","Thứ Năm","Thứ Sáu","Thứ Bảy"); 
				var montharray=new Array("/1","/2","/3","/4","/5","/6","/7","/8","/9","/10","/11","/12");
				document.write("<b>Hôm nay</b> "+dayarray[day]+", <br>Ngày "+daym+""+montharray[month]+"/"+year+"");
		</script>
</div>
   		<div id="timkiem">
       		<div id="formdangnhap" align="center">
            <?php
			
			if (!isset ($_COOKIE['tendangnhap']) && !isset ($_SESSION['dangnhap']['tendangnhap']))
			{
			?>
        <form id="formdangnhap2" name="formdangnhap2" method="post" action="xuly_dangnhap.php">
          Tên đăng nhập
          <input type="text" name="txtuser" id="txtuser" />
        Mật khẩu
        <input type="password" name="txtpass" id="txtpass" />
        <input type="checkbox" name="checkghinho" id="checkghinho" />
        Ghi nhớ đăng nhập
        <input type="submit" name="butdangnhap" id="butdangnhap" value="Đăng nhập" />
        </form>
        <?php
			}
			else
			{
			if (isset ($_COOKIE['tendangnhap']))
				{
				$_SESSION['dangnhap']['tendangnhap']=$_COOKIE['tendangnhap'];

				}
		  ?>
          Chào bạn, <b><?php echo $_SESSION['dangnhap']['tendangnhap']; ?></b>!<?php $slquyen="select * from users where idUser=".$_SESSION['dangnhap']['idtendangnhap']; 
		  $qrquyen=mysql_query($slquyen); 
		  if (mysql_num_rows($qrquyen)>0)
		  		{
					$rowquyen=mysql_fetch_array($qrquyen);
					if ($rowquyen['PhanQuyen']==1)
						{?>
                vào trang  <a href="/thoi-trang-tre/admin/index.php">Quản trị</a>
          <?php
						}
				}
		?>
        <a href="index.php?link=thongtincanhan&idUser=<?php echo $_SESSION['dangnhap']['idtendangnhap']; ?>">Thông tin cá nhân</a> <a href="xuly_dangxuat.php">Đăng xuất</a>
        <?php
			}
		  ?>
        </div>
        	<div id="formtimkiem" align="center" >
      	  <form id="formtimkiem2" name="formtimkiem2" method="post" action="index.php?link=timkiem">
      	    <input name="txttimkiem" type="text" id="txttimkiem" size="77" />
   	        <input type="submit" name="buttimkiem" id="buttimkiem" value="Tìm kiếm" />
      	  </form>
      	</div>
      </div>
        
    </div>
    <div id="content">
   	  <div id="left">
        <div id="giohang">
        <?php
		if (isset ($_SESSION['giohang']) && count ($_SESSION['giohang'])>0)
		{
		?>
        <p>Có <b><?php echo count($_SESSION['giohang']) ?></b> sản phẩm<br /><a href="index.php?link=chitietgiohang">Chi Tiết Giỏ Hàng</a></p>
        <?php
		}
		else 
		{
		?>
        <p>Giỏ hàng trống<br /><b>Chưa mua hàng</b></p>
        
        <?php
		}
		?>
</div>
        	<div id="menu">Danh Mục Sản Phẩm</div>
            <div id="menudoc"><?php include ("menu_doc.php"); ?></div>
        </div>
        <div id="right">
        <?php
		switch (@$_GET['link'])
		{
			case "chungloaisp": include ("sanphamtheochungloai.php"); break;
			case "loaisp": include ("sanphamtheoloai.php"); break;
			case "sanpham": include ("chitietsp.php"); break;
			case "gioithieu": include ("gioithieu.php"); break;
			case "lienhe": include ("lienhe.php"); break;
			case "dangky": include ("dangky.php"); break;
			case "saidangnhap": include ("dangnhapsai.php");break;
			case "timkiem": include ("timkiem.php");break;
			case "trangchuquantri": include ("admin/index.php");break;
			case "quanlychungloai": include ("admin/chungloaisanpham/chungloai.php");break;
			case "quanlyloai": include ("admin/loaisanpham/loaisanpham.php");break;
			case "quanlysanpham": include ("admin/sanpham/sanpham.php");break;
			case "suachungloai": include ("admin/chungloaisanpham/suachungloai.php");break;
			case "sualoai": include ("admin/loaidochoi/sualoai.php");break;
			case "suasanpham": include ("#");break; 
			case "xulysuachungloai": include ("admin/chungloaisanpham/xuly_sua.php");break;
			case "xulysualoai": include ("admin/loaisanpham/xuly_sua.php");break;
			case "xulysuasanpham": include ("#");break;
			case "themchungloai": include ("admin/chungloaisanpham/themchungloai.php");break;
			case "themloai": include ("admin/loaisanpham/themloai.php");break;
			case "themsanpham": include ("admin/sanpham/themsanpham.php");break;
			case "xulythemchungloai": include ("admin/chungloaisanpham/xuly_them.php");break;
			case "xulythemloai": include ("admin/loaisanpham/xuly_them.php");break;
			case "xulythemsanpham": include ("admin/sanpham/xuly_them.php");break;
			case "xulyxoachungloai": include ("admin/chungloaisanpham/xuly_xoa.php");break;
			case "xulyxoaloai": include ("admin/loaisanpham/xuly_xoa.php");break;
			case "xulyxoasanpham": include ("admin/sanpham/xuly_xoa.php");break;
			case "xulyjquerythemsanpham": include ("admin/sanpham/xuly_jquerythem.php");break;
			case "thongkehangdahet": include ("admin/thongkehangdahet.php");break;
			case "chitietgiohang": include ("chitietgiohang.php");break;
			case "thongtincanhan": include ("thongtincanhan.php");break;
			case "xulygiohang": include ("xuly_giohang.php");break;
			case "thongkehoadon": include ("admin/thongkehoadon.php");break;
			case "guihoadonthanhcong": include ("guidonhangthanhcong.php");break;
			default: include ("index_content.php");break;
			
		}
        ?>
        </div>
</div>
  <div id="footer">
    <p align="right"><b>Shop Thời Trang JK - Dịch Vụ Bán Hàng & Thu Tiền Tại Nhà Trên Địa Bàn TP.HCM</b><br />
    <table width="600" border="0" cellspacing="0" cellpadding="0" align="right">
  <tr>
    <td width="100">Địa chỉ:</td>
    <td width="500">số 86 - đường Ông Ích Khiêm - phường 4 - quận 11 - thành phố Hồ Chí Minh</td>
  </tr>
  <tr>
    <td>Điện thoại</td>
    <td>08.3844.3969 - 08.397.3545</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</p>
</div>
</div>

</body>
</html>
