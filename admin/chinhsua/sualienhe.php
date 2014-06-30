<?PHP
	$text = $_POST["data"];

	file_put_contents("../../lienhe.txt", $text);
	header ("location:/thoi-trang-tre/admin");
?>