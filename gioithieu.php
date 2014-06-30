
<style type="text/css">
<!--


#gioithieu {
	width: 790px;
	border: 2px solid #690;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px
}
#namegioithieu {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #690;
}
#showgioithieu {
	width: 100%;
}
#tranggioithieu {
	margin: auto;
	width: 730px;
}

-->
</style>
<div id="tranggioithieu">

	<div id="gioithieu">
		<div id="namegioithieu">Giới thiệu</div>
    	<div id="showgioithieu">
		<?PHP
			echo file_get_contents('gioithieu.txt');
		?>
        </div>
	</div>

</div>

