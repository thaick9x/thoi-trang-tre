<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />


<ul id="MenuBar1" class="MenuBarVertical">
<?php
include ("connect.php");
$slcl="select * from chungloaisanpham where AnHien='1'";
$qrcl=mysql_query($slcl);
while ($rowcl=mysql_fetch_array($qrcl))
{
?>
  <li><a class="MenuBarItemSubmenu" href="index.php?link=chungloaisp&idCL=<?php echo $rowcl['idCL']; ?>"><?php echo $rowcl['TenCL']; ?></a>
    <ul>
    <?php
	$sll="select * from loaisanpham where AnHien='1' and idCL=".$rowcl['idCL'] ;
	$qrl=mysql_query($sll);
	while ($rowl=mysql_fetch_array($qrl))
	{
	?>
      <li><a href="index.php?link=loaisp&idLoai=<?php echo $rowl['idLoai']; ?>"><?php echo $rowl['TenLoai']; ?></a></li>
     <?php
	}
	 ?>
    </ul>
  </li>
<?php
}
?>
</ul>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
