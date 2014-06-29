<!DOCTYPE html>
<html>
<head>

<title>Chỉnh sửa</title>
<meta charset="utf-8">
</head>

<body>

<form action="sua<?PHP echo $_GET['link'] ?>.php">
<textarea rows="30" cols="80" name="data" align="center">
<?PHP
	echo file_get_contents("../../".$_GET['link'].".txt");
?>
</textarea>

<BR><input type="submit" name="save" value="Save">

</form>

</body>

</html>