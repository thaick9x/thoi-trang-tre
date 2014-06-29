<?PHP
	$text = $_GET["data"];

	file_put_contents("../../gioithieu.txt", $text);
	header ("location:/thoi-trang-tre/admin");
?>