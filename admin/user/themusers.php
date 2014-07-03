<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Thêm Tài Khoản</b></p>
<form name="form1" id="form1" method="post" action="xuly_them.php">
<table width="500" border="1" cellspacing="1" cellpadding="1" align="center">
  <tr>
      <td>Tên Đăng Nhập </td>
      <td><input name="tendangnhap" type="text" id="tendangnhap" size="30" /></td>
    </tr>
	<tr>
      <td>Mật Khẩu </td>
      <td><input name="matkhau" type="text" id="matkhau" size="30" /></td>
    </tr>
	<tr>
      <td>Họ Và Tên </td>
      <td><input name="hovaten" type="text" id="hovaten" size="30"  /></td>
    </tr>
	<tr>
      <td>Giới Tính</td>
      <td><input name="gioitinh" type="text" id="gioitinh" size="30" /></td>
    </tr>
	<tr>
      <td>Ngày Sinh</td>
      <td><input name="ngaysinh" type="text" id="ngaysinh" size="30"  /></td>
    </tr>
	<tr>
      <td>Địa Chỉ</td>
      <td><input name="diachi" type="text" id="diachi" size="30"  /></td>
    </tr>
	<tr>
      <td>Tỉnh</td>
      <td><input name="tinh" type="text" id="tinh" size="30"  /></td>
    </tr>
	<tr>
      <td>Số Điện Thoại</td>
      <td><input name="sodt" type="text" id="sodt" size="30"/></td>
    </tr>
	<tr>
      <td>Số CMND</td>
      <td><input name="cmnd" type="text" id="cmnd" size="30"  /></td>
    </tr>
	<tr>
      <td>Ngày Cấp</td>
      <td><input name="ngaycap" type="text" id="ngaycap" size="30"  /></td>
    </tr>
	<tr>
      <td>Nơi Cấp</td>
      <td><input name="noicap" type="text" id="noicap" size="30"  /></td>
    </tr>
    <tr>
      <td>Phân Quyền:</td>
      <td><select name="phanquyen" id="phanquyen">
      <option value="0" <?php echo "selected='selected'"; ?>>User</option>
      <option value="1" <?php echo "selected='selected'"; ?>>Admin</option>
      </select></td>
    </tr>
  <tr>
  </tr>
  <tr>
    <td><input type="submit" name="them" id="them" value="Thêm" /></td>
    <td><a href="users.php"><input type="button" name="huy" id="huy" value="Hủy" /></a></td>
  </tr>
</table>
</form>
</body>
</html>