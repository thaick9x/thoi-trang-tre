<?PHP
	echo $text = $_POST["data"];

	file_put_contents("../../gioithieu.txt", $text);
	header ("location:/thoi-trang-tre/admin");
?>