function getMeteo() {
		$.ajax({
			url: "https://meteo-station.herokuapp.com/temps-reel.php?station=troislacs",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			if (data.vitesseVent != '') {
				var vitesse = parseFloat(data.vitesseVent.substring(0, data.vitesseVent.indexOf(' '))) * 0.539957; // conversion en Noeuds
				$('#vitesse-vent').html(vitesse.toFixed(1) + ' N');
			}
			else
			{
				$('#vitesse-vent').html('');
			}
			$('#orientation-vent').html(data.orientationVent);
			$('#temperature-air').html(data.temperatureExterieure);
			});
}

var myVar =	setInterval(getMeteo, 30000);	

$(document).ready(function() {
	getMeteo();
});
