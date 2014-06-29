
<style type="text/css">
<!--


#lienhe {
	width: 790px;
	border: 2px solid #690;
	moz-border-radius-topleft: 15px;
	webkit-border-top-left-radius: 15px;
	border-top-left-radius: 15px;
	moz-border-radius-topright: 15px;
	webkit-border-top-right-radius: 15px;
	border-top-right-radius: 15px
}
#namelienhe {
	width: 100%;
	border-bottom-width: 2px;
	border-bottom-style: solid;
	border-bottom-color: #690;
	font-size: 24px;
	font-weight: bolder;
	text-align: center;
	color: #690;
}
#showlienhe {
	width: 100%;
}
#tranglienhe {
	
	width: 730px;
}

-->
</style>
<div id="tranglienhe">

	<div id="lienhe">
		<div id="namelienhe">Liên hệ</div>
    	<div id="showlienhe">
		<textarea rows="20" cols="95" name="data" readonly>
			<?PHP
				echo file_get_contents('lienhe.txt');
			?>
		</textarea>
        </div>
	</div>

</div>

