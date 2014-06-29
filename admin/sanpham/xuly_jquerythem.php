<?php

if (isset ($_POST['idCL']))
$idCL=$_POST['idCL'];

$sll="select * from loaisanpham where idCL='$idCL'";
$qrl=mysql_query($sll);
while ($rowl=mysql_fetch_array($qrl))
{
?>
<option value="<?php echo $rowl['idLoai']; ?>"><?php echo $rowl['TenLoai']; ?></option>
<?php
}
?>