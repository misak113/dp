<!DOCTYPE html>		
<html>
	<head>
		<meta charset="utf-8" />
		<title>Article text viewer</title>
		
		<!-- Icons -->
		<link rel="shortcut icon" href="favicon.png" />

		<!-- CSS stylesheet -->
		<link rel="stylesheet" href="style.css" />
		
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		
		<script type="text/javascript">
			var lastResp = null;
			$(document).ready(function ($) {
				var reload = function () {
					var url = './diplomova_prace.html';
					//var url = 'https://dl.dropboxusercontent.com/s/er4ne2k32d15uin/diplomova_prace.html?token_hash=AAFBsMU7f3x5oBKsMup51iv_BnlACmLqxyXCGq9ePL9NXA&dl=1';
					$.get(url+'?load&v='+Math.random(), function (resp) {
							if (lastResp != resp) {
								$('body').html(resp);
								lastResp = resp;
							}
							setTimeout(reload, 1000);
						}
					);
				};
				reload();
			});
		</script>
	</head>
	<body>
		<?php include __DIR__."./diplomova_prace.html"; ?>
	</body>
</html>	
