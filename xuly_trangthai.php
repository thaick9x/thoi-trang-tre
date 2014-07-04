<?PHP
require_once 'connect.php';
$query = "SELECT idTinhTrang FROM hoadon WHERE idHoaDon = ".$_GET['idHoaDon'];
$kq = mysql_query($query);
if ($kq = mysql_fetch_array($kq))
{
	switch ($kq['idTinhTrang'])
	{
		case 4:
		case 3:
			break;
		case 2:
			if ($_GET['next'] == 3)
			{
				chuyenTrangThai($_GET['idHoaDon'],$_GET['next']);
			}
			break;
		case 1:
			if ($_GET['next'] == 2)
			{
				chuyenTrangThai($_GET['idHoaDon'],$_GET['next']);
			} else
			if ($_GET['next'] == 4)
			{
				chuyenTrangThai($_GET['idHoaDon'],$_GET['next']);
			}
			break;
		default:
			
	}
	
}
header('Location: index.php?link=thongtincanhan&idUser='.$_GET['idUser']);

function chuyenTrangThai($idHD, $next)
{
	$query = "UPDATE hoadon SET idTinhTrang = $next WHERE idHoaDon = $idHD";
	mysql_query($query);
}
?>