<html>
<head>
</head>
<body>
				  <table>
					<tr>
						<td><p>Vitesse vent </p></td>
						<td><p id="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td>
						<td><p id="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td>
						<td><p id="temperature-air"></p></td>
					</tr>
					<!--
					<tr>
						<td><p>Eau </p></td>
						<td><p id="temperature-eau"></p></td>
					</tr>
-->					
					<tr>
						<td colspan=2><p style="text-align: right; font-size: 10px;"><em><a href="https://www.weatherlink.com/map/177f804a-47af-49bb-adfe-0f6a74cea4ad" target="_blank">Données temps réel</a></em></p></td>
					</tr>						
				</table>
				
	  <script src="js/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/meteo2.js"></script>	  
      <script> 
		station = "177f804a-47af-49bb-adfe-0f6a74cea4ad";
		var myVar =	setInterval(getMeteo, 30000);		
        $(document).ready(function($) { 
			getMeteo();		 
		});
      </script>
				
</body>
</html>