<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="" />
<meta name="description" content=""/>
<title>Welcome-ΰ�����ս��</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script type="text/javascript" src="js/jquery.js"></script>

</head>
<body>
<div class="Upper">
	<table style="width:100%" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
			<td>
			<table style="width:600px" border="0" cellspacing="0" cellpadding="0" align="center">

				<tr>
					<td style="padding:70px 0 0" align="center" width="385">
					<span id="botAgregar" style="position:absolute; z-index:999; color:red; top:20px; margin-left:-35px;"></span>
					<h1 style="color:#f4f2ed"></h1>
					<p style="color:#d3f1a0"></p>
					</td>
				</tr>
				<tr>
					<td style="padding:10px 0" colspan="2" align="right"></td>
				</tr>
			</table>
			<table style="width:600px" border="0" cellspacing="0" cellpadding="0" align="center">
				<tr>
					<td class="content" style align="left" valign="top" width="600">
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td style="padding:20px 0 25px 95px" align="left">
							</td>
						</tr>
						<tr>
							<td style="padding:0 0 25px 95px" valign="top"></td>
						</tr>


					</table>
					</td>
				</tr>
			</table>

			</td>
		</tr>
	</table>
</div>
<script type="text/javascript">
(function($) {
	$.fn.typewriter = function() {
		this.each(function() {
			var $ele = $(this), str = $ele.html(), progress = 0;
			$ele.html('');
			var timer = setInterval(function() {
				var current = str.substr(progress, 1);
				if (current == '<') {
					progress = str.indexOf('>', progress) + 1;
				} else {
					progress++;
				}
				$ele.html(str.substring(0, progress) + (progress & 1 ? '_' : ''));
				if (progress >= str.length) {
					clearInterval(timer);
				}
			}, 75);
		});
		return this;
	};
})(jQuery);
</script>
<script type="text/javascript">

$.AutomLeafStart({
leafsfolder:"images/",
howmanyimgsare:8,
initialleafs:10,
maxYposition:-5,
multiplyclick:true,
multiplynumber:2,
infinite:true,
fallingsequence:500
});
$.AutomLeafAdd({leafsfolder:"images/",add:8,})
$("#botAgregar").on("click",function(){
$.AutomLeafAdd({leafsfolder:"images/",add:8,})

});
$("#code").typewriter();
</script>
<script type="text/javascript" src="js/txt.js"></script>
<canvas id="canvas" width="888" height="666"></canvas>
</body>
</html>