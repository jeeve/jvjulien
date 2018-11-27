var station;

function getMeteo() {
		$.ajax({
			url: "https://meteo-station.herokuapp.com/temps-reel-2.php?station=" + station,
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			var temperatureExterieure = ((parseFloat(data.temperature) -32) * 5/9).toFixed(0) + ' °C'; 
			var vitesseVent = data.windSpeed;
			var orientationVent = data.windDirection + ' °';
			var temperatureInterieure = '';
			
			if (vitesseVent != '') {
				var vitesse = parseFloat(vitesseVent) * 0.868976; // conversion Mph en Noeuds
				$('#vitesse-vent').html(vitesse.toFixed(1) + ' n');
				$('#vitesse-vent-s').html(vitesse.toFixed(1) + ' n');
			}
			else
			{
				$('#vitesse-vent').html('');
				$('#vitesse-vent-s').html('');
			}
			$('#orientation-vent').html(orientationVent);
			$('#orientation-vent-s').html(orientationVent);
			$('#temperature-air').html(temperatureExterieure);
			$('#temperature-air-s').html(temperatureExterieure);
			$('#temperature-eau').html(temperatureInterieure);			
			$('#temperature-eau-s').html(temperatureInterieure);
			});
}