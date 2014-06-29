<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Sản Phẩm</b></p>
<table width="750" border="1" cellspacing="1" cellpadding="1" align="center">
  <tr>
    <td align="center">id Sản Phẩm</td>
    <td align="center">Tên chủng loại Sản Phẩm</td>
    <td align="center">Tên loại Sản Phẩm</td>
    <td align="center">Tên Sản Phẩm</td>
    <td align="center">Ngày Cập Nhật</td>
    <td align="center">Giá</td>
    <td align="center">Hình</td>
    <td align="center">Số lượng tồn kho</td>
    <td align="center">Số lượng đã bán</td>
    <td align="center">Ẩn hiện</td>
    <td align="center"><a href="index.php?link=themsanpham">Thêm</a></td>
  </tr>
  <?php
  require_once 'connect.php';
  $sldc="select * from sanpham";
  $qrdc= mysql_query($sldc);
  $tsdong=mysql_num_rows($qrdc);
  $sodong=10;
  $tstrang=ceil($tsdong/$sodong);//Tính được tổng số trang
  //Lấy được số trang
  if (isset($_GET['trang']))
  {
	  $trang=intval($_GET['trang']);
  }
  else 
  {
	  $trang=1;
  }
  //Tính được vị trí của trang
  $vitri=($trang-1)*$sodong;
  
  $sldc2="select * from sanpham limit $vitri,$sodong";
  $qrdc2=mysql_query($sldc2);
  while ($rowdc=mysql_fetch_array($qrdc2))
  {
  ?>
  <tr>
    <td align="center"><?php echo $rowdc['idSP']; ?></td>
    <td><?php 
				$slcl="select * from chungloaisanpham where idCL=".$rowdc['idCL'];
				$qrcl=mysql_query($slcl);
				if ($rowcl=mysql_fetch_array($qrcl))
				echo $rowcl['TenCL'];
		?></td>
    <td><?php
				$sll="select * from loaisanpham where idLoai=".$rowdc['idLoai'];
				$qrl=mysql_query($sll);
				if ($rowl=mysql_fetch_array($qrl))
				echo $rowl['TenLoai'];
		?></td>
    <td><?php echo $rowdc['TenSP']; ?></td>
    <td align="center"><?php echo $rowdc['NgayCapNhat']; ?></td>
    <td align="center"><?php echo $rowdc['Gia']; ?></td>
    <td align="center"><img src="images/<?php echo $rowdc['UrlHinh']; ?>" width="50" height="60" /></td>
    <td align="center"><?php echo $rowdc['SoLuongTonKho']; ?></td>
    <td align="center"><?php echo $rowdc['SoLuongDaBan']; ?></td>
    <td align="center"><?php if ($rowdc['AnHien']==0) echo "Ẩn"; if ($rowdc['AnHien']==1) echo "Hiện"; ?></td>
    <td align="center"><a href="xuly_xoa.php?idSP=<?php echo $rowdc['idSP']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ???????');">Xóa</a><br /><a href="#">Sửa</a></td>
  </tr>
  <?php
  }
  ?>
</table>

<p align="right"><?php
$k=1;
echo "Trang: ";
for ($k=1;$k<=$tstrang;$k++)
{
	if ($k==$trang)
	{
		echo "<b><font size='5'; color='blue'>"." ".$k." "."</font></b>";
	}
	else 
	{
		echo "<a href='index.php?link=quanlysanpham&idSP=".$rowdc['idSP']."&trang=".$k."'.>".$k." "."</a>";
	}
}
?></p>
</body>
</html>