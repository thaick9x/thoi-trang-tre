<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html"; charset="utf-8" />
<title>Untitled Document</title>

</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Loại Sản Phẩm</b></p>
<table width="700" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="center" width="80">ID Loại</td>
    <td align="center" width="200">Tên chủng loại sản phẩm</td>
    <td align="center" width="200">Tên loại sản phẩm</td>
    <td align="center" width="100">Ẩn hiện</td>
    <td align="center"><a href="http://localhost/thoi-trang-tre/admin/loaisanpham/themloai.php">Thêm</a></td>
  </tr>
  <?php
  require_once '../../connect.php';
  $sl="select * from loaisanpham";
  $qr=mysql_query($sl);
  $tsdong=mysql_num_rows($qr);
  $sodong=20;
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
  $sl2="select * from loaisanpham limit $vitri,$sodong";
  $qr2=mysql_query($sl2);
  while ($row2=mysql_fetch_array($qr2))
  {
  ?>
  <tr>
    <td align="center"><?php echo $row2['idLoai']; ?></td>
    <td><?php
			$slcl="select * from chungloaisanpham where idCL=".$row2['idCL'];
			$qrcl=mysql_query($slcl);
			$rowcl=mysql_fetch_array($qrcl);
			echo $rowcl['TenCL'];
    	?></td>
    <td><?php echo $row2['TenLoai']; ?></td>
    <td align="center"><?php if ($row2['AnHien']==0) echo "Ẩn"; if ($row2['AnHien']==1) echo "Hiện"; ?></td>
    <td align="center"><a href="http://localhost/thoi-trang-tre/admin/loaisanpham/xuly_xoa.php?idLoai=<?php echo $row2['idLoai']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ???????');">Xóa</a> -- <a href="http://localhost/thoi-trang-tre/admin/loaisanpham/sualoai.php?idLoai=<?php echo $row2['idLoai']; ?>">Sửa</a></td>
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
		echo "<a href='index.php?link=quanlyloai&idLoai=".$row2['idLoai']."&trang=".$k."'.>".$k." "."</a>";
	}
}
?></p>
<?PHP include_once "../footer.php" ?>
</body>
</html>