<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Chủng Loại Sản Phẩm</b></p>
<table width="700" border="1" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="center">ID chủng loại</td>
    <td align="center">Tên chủng loại sản phẩm</td>
    <td align="center">Ẩn hiện</td>
    <td align="center"><a href="/thoi-trang-tre/admin/chungloaisanpham/themchungloai.php">Thêm</a></td>
  </tr>
  <?php
    //put your code here
    // constructor
    require_once '../../connect.php';
    
  $sl="select * from chungloaisanpham";
  $qr=mysql_query($sl);
  $no_of_rows = mysql_num_rows($qr);
  if($no_of_rows>0)
  {
	for($i=0;$i<$no_of_rows;$i++)
	{
		$cl=mysql_fetch_array($qr);
		  
		?>
	  <tr>
		<td align="center"><?php echo $cl['idCL']; ?></td>
		<td><?php echo $cl['TenCL']; ?></td>
		<td align="center"><?php if ($cl['AnHien']==0) echo "Ẩn"; if ($cl['AnHien']==1) echo "Hiện"; ?></td>
		<td align="center"><a href="/thoi-trang-tre/admin/chungloaisanpham/xuly_xoa.php?idCL=<?php echo $cl['idCL']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không ???????');">Xóa</a> -- <a href="/thoi-trang-tre/admin/chungloaisanpham/suachungloai.php?idCL=<?php echo $cl['idCL']; ?>">Sửa</a></td>
	  </tr>
	  <?php
	}
  }
  ?>
</table>
</body>
</html>