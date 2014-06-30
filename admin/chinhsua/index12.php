<!DOCTYPE html>
<html>
<head>

<title>Chỉnh sửa</title>
<meta charset="utf-8">
</head>
<script src="jquery/jquery-1.8.0.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<body>
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
<form action="sua<?PHP echo $_GET['link'] ?>.php">
<textarea rows="30" cols="80" name="data" align="center">

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
<BR><input type="submit" name="save" value="Save">

</form>

</body>

</html>