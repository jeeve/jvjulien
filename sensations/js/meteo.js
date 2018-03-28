function getMeteo() {
		$.ajax({
			url: "https://meteo-station.herokuapp.com/temps-reel.php?station=troislacs",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			if (data.vitesseVent != '') {
				var vitesse = parseFloat(data.vitesseVent.substring(0, data.vitesseVent.indexOf(' '))) * 0.539957; // conversion en Noeuds
				$('#vitesse-vent').html(vitesse.toFixed(1) + ' n');
				$('#vitesse-vent-s').html(vitesse.toFixed(1) + ' n');
			}
			else
			{
				$('#vitesse-vent').html('');
				$('#vitesse-vent-s').html('');
			}
			$('#orientation-vent').html(data.orientationVent);
			$('#orientation-vent-s').html(data.orientationVent);
			$('#temperature-air').html(data.temperatureExterieure);
			$('#temperature-air-s').html(data.temperatureExterieure);
			if (data.temperatureInterieure == "") {
				$('#temperature-eau').html("cf Roger");			
				$('#temperature-eau-s').html("cf Roger");				
			} else
			{
				$('#temperature-eau').html(data.temperatureInterieure);			
				$('#temperature-eau-s').html(data.temperatureInterieure);
			}
			});
}

var myVar =	setInterval(getMeteo, 30000);	

$(document).ready(function() {
	getMeteo();
});
