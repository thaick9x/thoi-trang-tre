<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<script src="jquery/jquery-1.8.0.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<body>
<?php
require_once '../../connect.php';
if (isset ($_GET['idSP']))
$idSP=$_GET['idSP'];

$sll="select * from sanpham where idSP=".$idSP."";
echo $sll;
$qrl=mysql_query($sll);
if ($rowl=mysql_fetch_array($qrl))
{
?>

<form id="form1" name="form1" method="post" action="/thoi-trang-tre/admin/sanpham/xuly_sua.php" enctype="multipart/form-data">
  <table width="500" border="1" cellspacing="1" cellpadding="1" align="center">
	
	<tr>
      <td>Tên Chủng Loại:</td>
	  <td><select name="chungloai" id="chungloai">
	  
      <?php
	  require_once '../../connect.php';
	  $slcl="select * from chungloaisanpham";
	  $qrcl=mysql_query($slcl);
	  while ($rowcl=mysql_fetch_array($qrcl))
	  {
	  ?>
      <option value="<?php echo $rowcl['idCL']; ?>"> <?php echo $rowcl['TenCL']; ?></option>
      <?php
	  }
	  ?>
      </select></td> 
      
    </tr>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#chungloai").change(function(){
				$.ajax({
					type:"POST",
					url:"../../index.php?link=xulyjquerythemsanpham",
					data:"idCL="+$("#chungloai").val(),
					success:function(ketqualoai){
						$("#loai").html(ketqualoai);
					}
				});
			});
		});
	</script>
	<tr>
      <td>Tên Loại Sản Phẩm:</td>
      <td><select name="loai" id="loai" value="<?php echo $rowl['idLoai']; ?>">   
		  <?php
		  require_once '../../connect.php';
		  $slcl="select * from loaisanpham";
		  $qrcl=mysql_query($slcl);
		  while ($rowcl=mysql_fetch_array($qrcl))
		  {
		  ?>
		  <option value="<?php echo $rowcl['idLoai']; ?>"><?php echo $rowcl['TenLoai']; ?></option>
		  <?php
		  }
		  ?>
      </select></td>
    </tr>
	<tr>
      <td>Tên Sản Phẩm:</td>
      <td><input name="tensanpham" type="text" id="tensanpham" size="30" value="<?php echo $rowl['TenSP']; ?>" /></td>
    </tr>
    <tr>
      <td valign="top">Mô tả:</td>
      <td><textarea name="mota" id="mota" cols="70" rows="10" ><?php echo $rowl['MoTa']; ?></textarea>
      <script type="text/javascript">
			//<![CDATA[

				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				CKEDITOR.replace( 'mota',
	{
		toolbar :
		[
			{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike' ] },
			{ name: 'paragraph', items : [ 'NumberedList','BulletedList' ] },
			{ name: 'tools', items : [ 'Maximize' ] },
			{ name: 'colors', items : [ 'TextColor','BGColor' ] },
			{ name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] },
		]
	});
				
//Tham khao thiet lap toolbar: http://docs.cksource.com/CKEditor_3.x/Developers_Guide/Toolbar#Toolbar_Customization
				

			//]]>
			</script>
      </td>
    </tr>
	<tr>
      <td>Giá:</td>
      <td><input name="gia" type="text" id="gia" size="30" value="<?php echo $rowl['Gia']; ?>" /></td>
    </tr>
	<tr>
      <td>Hình Ảnh:</td>
	  <td align="center"><img src="images/<?php echo $rowl['UrlHinh']; ?>" width="50" height="60" />
      <input name="hinhanh" type="file" id="hinhanh" size="50" /></td>
    </tr>
    <tr>
      <td>Ẩn hiện:</td>
      <td><select name="anhien" id="anhien">
      <option value="0" <?php if ($rowl['AnHien']==0) echo "selected='selected'"; ?>>Ẩn</option>
      <option value="1" <?php if ($rowl['AnHien']==1) echo "selected='selected'"; ?>>Hiện</option>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="sua" id="sua" value="Sửa" /></td>
      <td><a href="sanpham.php"><input type="button" name="huy" id="huy" value="Hủy" /></a></td>
    </tr>
  </table>
  <input type="hidden" id="idSP" name="idSP" value="<?php echo $rowl['idSP']; ?>" />
</form>
<?php
}
?>
</body>
</html>