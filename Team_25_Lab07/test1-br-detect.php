<!DOCTYPE html>
<head>
	<TITLE>how to detect browser using PHP </TITLE>
</head>
<body>
	<h1> Display Cross Browsers Compatibility Issues line1</h1>        
	<p> Display Cross Browsers Compatibility Issues line2</p>
	<p id="demo"></p>
<script>
	window.addEventListener("load", function() {
		var brow = "";
  		// CHROME
  		if (navigator.userAgent.indexOf("Chrome") != -1 ) {
  			brow = "Google Chrome";
  		}
  		// FIREFOX
  		else if (navigator.userAgent.indexOf("Firefox") != -1 ) {
    		brow = "Firefox";
  		}
  		// INTERNET EXPLORER
  		else if (navigator.userAgent.indexOf("Trident") != -1 ) {
    		brow = "Internet Explorer";
  		}
  		// EDGE
  		else if (navigator.userAgent.indexOf("Edge") != -1 ) {
    		brow = "Miscrosoft Edge";
  		}
  		// SAFARI
  		else if (navigator.userAgent.indexOf("Safari") != -1 ) {
  			brow = "Safari";
  		}
  		// OPERA
  		else if (navigator.userAgent.indexOf("Opera") != -1 ) {
    		brow = "Opera";
  		}
  		// YANDEX BROWSER
  		else if (navigator.userAgent.indexOf("Opera") != -1 ) {
    		brow = "Opera - Yandex Browser";
  		}
  		// OTHERS
  		else {
    		brow = "Others";
  		}
  		document.getElementById("demo").innerHTML =
  			"Trying to detect Browser name! ." + "<br />" + navigator.userAgent + "<br />" + "<br />" +
  			"Browser: " + brow;
	});
</script>
	<!--<script>
		document.getElementById("demo").innerHTML = 
			"Trying to detect Browser name! ." + "<br />" + navigator.userAgent + "<br />" + "Browser: " + ;
	</script>-->
</body>
</html> 