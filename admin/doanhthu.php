<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<table>
		<tr>
			<td>Ngày</td>
			<select>
				<option value="0">Tất cả</option>
<?PHP
				<option value="saab">Saab</option>
				<option value="mercedes">Mercedes</option>
?>
				<option value="audi">Audi</option>
			</select>
			<td><input type="text" name="txtuser" id="txtuser" /></td>
		</tr>
		<tr>
			<td>Tháng</td>
			<td><input type="password" name="txtpass" id="txtpass" /></td>
		</tr>
		<tr>
			<td align="right"><input type="checkbox" name="checkghinho" id="checkghinho" /></td>
			<td>Ghi nhớ đăng nhập</td>
		</tr>
		<tr>
			<td><input type="submit" name="butdangnhap" id="butdangnhap" value="Đăng nhập" /></td>
			<td><input type="button" value="Về trang chủ" onclick="location.href = '/thoi-trang-tre'" /></td>
		</tr>
	</table>
</body>
</html>


<?PHP





?>