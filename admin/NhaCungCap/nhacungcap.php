error_reporting(E_ALL & ~ E_NOTICE);
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Nhà Cung Cấp</b></p>
<table width="700" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="center">ID Nhà Cung Cấp</td>
    <td align="center">Tên Nhà Cung Cấp</td>
    <td align="center">Địa Chỉ</td>
    <td align="center">Thông tin</td>
    <td align="center">Ẩn hiện</td>
    <td align="center"><a href="http://localhost/thoi-trang-tre/admin/nhacungcap/themnhacungcap.php">Thêm</a></td>
  </tr>
  <?php
    //put your code here
    // constructor
    require_once '../../connect.php';
  $sl="select * from nhacungcap";
  $qr=mysql_query($sl);
  $no_of_rows = mysql_num_rows($qr);
  if($no_of_rows>0)
  {
	for($i=0;$i<$no_of_rows;$i++)
	{
		$cl=mysql_fetch_array($qr);
		  
		?>
	  <tr>
		<td align="center"><?php echo $ncc['idNCC']; ?></td>
		<td><?php echo $ncc['TenNCC']; ?></td>
		<td><?php echo $ncc['DiaChi'];?></td>
		<td><?php echo $ncc['ThongTin'];?></td>
		<td align="center"><?php if ($ncc['AnHien']==0) echo "Ẩn"; if ($ncc['AnHien']==1) echo "Hiện"; ?></td>
		<td align="center"><a href="http://localhost/thoi-trang-tre/admin/nhacungcap/xuly_xoa.php?idNCC=<?php echo $ncc['idNCC']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ???????');">Xóa</a> -- <a href="http://localhost/thoi-trang-tre/admin/nhacungcap/suanhacungcap.php?idNCC=<?php echo $ncc['idNCC']; ?>">Sửa</a></td>
	  </tr>
	  <?php
	}
  }
  ?>
</table>
</body>
</html>