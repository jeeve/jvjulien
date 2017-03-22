function getMeteo() {
		$.ajax({
			url: "https://meteo-station.herokuapp.com/temps-reel.php?station=troislacs",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			$('#vitesse-vent').html(data.vitesseVent);
			$('#orientation-vent').html(data.orientationVent);
			$('#temperature-air').html(data.temperatureExterieure);
			$('#temperature-eau').html(data.temperatureInterieure);
			});
}

var myVar =	setInterval(getMeteo, 30000);	

$(document).ready(function() {
	getMeteo();
});
