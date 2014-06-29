<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<script src="jquery/jquery-1.8.0.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Quản Trị Thêm Sản Phẩm</b></p>
<form action="index.php?link=xulythemdochoi" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="800" border="1" cellspacing="0" cellpadding="0" align="center">
    <tr>
      <td width="210">Tên chủng loại Sản Phẩm:</td>
      <td><select name="chungloai" id="chungloai">
      <?php
	  $slcl="select * from chungloaisanpham";
	  $qrcl=mysql_query($slcl);
	  while ($rowcl=mysql_fetch_array($qrcl))
	  {
	  ?>
      <option value="<?php echo $rowcl['idCL']; ?>"><?php echo $rowcl['TenCL']; ?></option>
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
      <td>Tên loại sản phẩm:</td>
      <td><select name="loai" id="loai">   
      </select></td>
    </tr>
    <tr>
      <td>Tên sản phẩm:</td>
      <td><input name="sanpham" type="text" id="sanpham" size="50" /></td>
    </tr>
    <tr>
      <td valign="top">Mô tả:</td>
      <td><textarea name="mota" id="mota" cols="70" rows="10"></textarea>
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
      <td><input type="text" name="gia" id="gia" /></td>
    </tr>
    <tr>
      <td>Hình ảnh:</td>
      <td><input name="hinhanh" type="file" id="hinhanh" size="50" /></td>
    </tr>
    <tr>
      <td>Số lượng thêm:</td>
      <td><input type="text" name="soluongthem" id="soluongthem" /></td>
    </tr>
    <tr>
      <td>Ẩn hiện:</td>
      <td><select name="anhien" id="anhien">
      <option value="0">Ẩn</option>
      <option value="1">Hiện</option>
      </select></td>
    </tr>
    <tr>
      <td><input type="submit" name="them" id="them" value="Thêm" /></td>
      <td><input type="reset" name="xoa" id="xoa" value="Hủy" /></td>
    </tr>
  </table>
  <input type="hidden" id="ngaycapnhat" name="ngaycapnhat" value="<?php echo date("Y-m-d:m:s",time ()) ?>" />
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("#loai").load('../../index.php?link=xulyjquerythemsanpham','&idCL='+$("#chungloai").val());
	});
</script>
</body>
</html>