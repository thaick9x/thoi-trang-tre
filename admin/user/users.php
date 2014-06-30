<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Tài Khoản</b></p>
<table width="750" border="1" cellspacing="1" cellpadding="1" align="center">
  <tr>
    <td align="center">id User</td>
    <td align="center">Tên Đăng Nhập</td>
    <td align="center">Họ Và Tên</td>
    <td align="center">Giới Tính</td>
    <td align="center">Ngày Sinh</td>
    <td align="center">Địa Chỉ</td>
    <td align="center">Tỉnh</td>
    <td align="center">Số Điện Thoại</td>
    <td align="center">Số CMND</td>
    <td align="center">Phân Quyền</td>
	<td align="center"><a href="http://localhost/thoi-trang-tre/admin/user/themusers.php">Thêm</a></td>
    
  </tr>
  <?php
  require_once 'connect.php';
  $sldc="select * from users";
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
  
  $sldc2="select * from users limit $vitri,$sodong";
  $qrdc2=mysql_query($sldc2);
  while ($rowdc=mysql_fetch_array($qrdc2))
  {
  ?>
  <tr>
    <td align="center"><?php echo $rowdc['idUser']; ?></td>
	<td align="center"><?php echo $rowdc['TenDangNhap']; ?></td>
	<td align="center"><?php echo $rowdc['HoVaTen']; ?></td>
	<td align="center"><?php echo $rowdc['GioiTinh']; ?></td>
	<td align="center"><?php echo $rowdc['NgaySinh']; ?></td>
	<td align="center"><?php echo $rowdc['DiaChi']; ?></td>
	<td align="center"><?php echo $rowdc['TinhThanh']; ?></td>
	<td align="center"><?php echo $rowdc['SoDT']; ?></td>
	<td align="center"><?php echo $rowdc['SoCMND']; ?></td>
	<td align="center"><?php echo $rowdc['PhanQuyen']; ?></td>
	<td align="center"><a href="xuly_xoa.php?idUser=<?php echo $rowdc['idUser']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ???????');">Xóa</a><br /><a href="sua_users.php?idUser=<?php echo $rowdc['idUser']; ?>">Sửa</a></td>
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