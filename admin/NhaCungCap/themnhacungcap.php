<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Thêm Nhà Cung Cấp</b></p>
<form name="form1" id="form1" method="post" action="xuly_them.php">
<table width="500" border="1" cellspacing="1" cellpadding="1" align="center">
  <tr>
    <td width="200">Tên Nhà Cung Cấp :</td>
    <td><input name="tennhacungcap" type="text" id="tennhacungcap" size="30" /></td>
  </tr>
  <tr>
    <td width="300">Địa Chỉ :</td>
    <td><input name="diachinhacungcap" type="text" id="diachinhacungcap" size="30" /></td>
  </tr>
  <tr>
    <td width="400">Thông tin Nhà Cung Cấp :</td>
    <td><input name="thongtinnhacungcap" type="text" id="thongtinnhacungcap" size="30" /></td>
  </tr>
  <tr>
    <td>Ẩn hiện:</td>
    <td><select name="anhien" id="anhien">
    <option value="0">Ẩn</option>
    <option value="1">Hiện</option>
    </select></td>
  </tr>
  <tr>
    <td><input type="submit" name="them" id="them" value="Thêm" /></td>
    <td><a href="nhacungcap.php"><button>Hủy</button></a></td>
  </tr>
</table>
</form>
</body>
</html>