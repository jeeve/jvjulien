$(document).ready(function()
		$.ajax({
			url: "https://meteo-station.herokuapp.com/temps-reel.php"
		}).then(function(data) {
			console.log(data);
			$('#vitesse-vent').text('25');
			$('#temperature-air').text(data.temperatureAir);
			$('#temperature-eau').text(data.temperatureEau);
			}
		));
