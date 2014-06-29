<?php session_start(); ob_start(); 
if (isset ($_SESSION['dangnhap']['tendangnhap']))
{
	session_destroy();
	header("location:index.php");
}

?>