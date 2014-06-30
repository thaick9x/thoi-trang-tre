<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<script src="jquery/jquery-1.8.0.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>

<body>
<p align="center" style="color:#06F; font-size:24px;"><b>Trang Chỉnh Sửa</b></p>
<form action="sua<?PHP echo $_GET['link'] ?>.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="800" border="1" cellspacing="0" cellpadding="0" align="center">
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
      
      <td><textarea name="data" id="data" cols="70" rows="10">
	  <?PHP
		echo file_get_contents("../../".$_GET['link'].".txt");
		?>
	  </textarea>
      <script type="text/javascript">
			//<![CDATA[

				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.

				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				CKEDITOR.replace( 'data',
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
  </table>
  <BR><input type="submit" name="save" value="Save">
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("#loai").load('../../index.php?link=xulyjquerythemsanpham','&idCL='+$("#chungloai").val());
	});
</script>
</body>
</html>