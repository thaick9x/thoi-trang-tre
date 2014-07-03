<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require_once '../../connect.php';
if (isset ($_GET['idUser']))
$idUser=$_GET['idUser'];

$sll="select * from users where idUser='$idUser'";
$qrl=mysql_query($sll);
if ($rowl=mysql_fetch_array($qrl))
{
?>
<form id="form1" name="form1" method="post" action="/thoi-trang-tre/admin/user/xuly_sua.php?idUser=<?php echo $rowl['idUser']; ?>">
  <table width="500" border="1" cellspacing="1" cellpadding="1" align="center">
	<tr>
      <td>Tên Đăng Nhập </td>
      <td><input name="tendangnhap" type="text" id="tendangnhap" size="30" value="<?php echo $rowl['TenDangNhap']; ?>" /></td>
    </tr>
	<tr>
      <td>Họ Và Tên </td>
      <td><input name="hovaten" type="text" id="hovaten" size="30" value="<?php echo $rowl['HoVaTen']; ?>" /></td>
    </tr>
	<tr>
      <td>Giới Tính</td>
      <td><input name="gioitinh" type="text" id="gioitinh" size="30" value="<?php echo $rowl['GioiTinh']; ?>" /></td>
    </tr>
	<tr>
      <td>Ngày Sinh</td>
      <td><input name="ngaysinh" type="text" id="ngaysinh" size="30" value="<?php echo $rowl['NgaySinh']; ?>" /></td>
    </tr>
	<tr>
      <td>Địa Chỉ</td>
      <td><input name="diachi" type="text" id="diachi" size="30" value="<?php echo $rowl['DiaChi']; ?>" /></td>
    </tr>
	<tr>
      <td>Tỉnh</td>
      <td><input name="tinh" type="text" id="tinh" size="30" value="<?php echo $rowl['TinhThanh']; ?>" /></td>
    </tr>
	<tr>
      <td>Số Điện Thoại</td>
      <td><input name="sodt" type="text" id="sodt" size="30" value="<?php echo $rowl['SoDT']; ?>" /></td>
    </tr>
	<tr>
      <td>Số CMND</td>
      <td><input name="cmnd" type="text" id="cmnd" size="30" value="<?php echo $rowl['SoCMND']; ?>" /></td>
    </tr>
	<tr>
      <td>Ngày cấp</td>
      <td><input name="ngaycmnd" type="text" id="ngaycmnd" size="30" value="<?php echo $rowl['NgayCapCMND']; ?>" /></td>
    </tr>
	<tr>
      <td>Nơi cấp</td>
      <td><input name="noicmnd" type="text" id="noicmnd" size="30" value="<?php echo $rowl['NoiCapCMND']; ?>" /></td>
    </tr>
    <tr>
      <td>Phân Quyền:</td>
      <td><select name="phanquyen" id="phanquyen">
      <option value="0" <?php if ($rowl['PhanQuyen']==0) echo "selected='selected'"; ?>>User</option>
      <option value="1" <?php if ($rowl['PhanQuyen']==1) echo "selected='selected'"; ?>>Admin</option>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="sua" id="sua" value="Sửa" /></td>      
	  <td><a href="users.php"><input type="button" value="Hủy"></a></td>
    </tr>
  </table>
  <input type="hidden" id="idSP" name="idSP" value="<?php echo $rowl['idSP']; ?>" />
</form>
<?php
}
?>
</body>
</html>