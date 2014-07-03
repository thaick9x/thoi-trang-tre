<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<form id="formthongkehang" name="formthongkehang" action="" method="post">
	<p align="center" style="color:#06F; font-size:16px;">Chọn loại thống kê
	<select name="loai" >
			<option value="sanphamchay">Sản phẩm bán chạy</option>
			<option value="sanphame">Sản phẩm bán ế</option>
			<option value="thongkehangdahet">Sản phẩm hết hàng</option>
	</select>
	<input type="submit" name="Submit" value="OK">
	</p>
</form>

<?PHP
	if (isset($_POST['loai']))
	{
		include $_POST['loai'].".php";
	}
	
?>
