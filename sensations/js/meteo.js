function getMeteo() {
		$.ajax({
			url: "https://meteo-station.herokuapp.com/temps-reel.php?station=troislacs",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			$('#vitesse-vent').html(data.vitesseVent);
			$('#orientation-vent').html(data.orientationVent);
			$('#temperature-air').html(data.temperatureAir);
			$('#temperature-eau').html(data.temperatureEau);
			});
}

var myVar =	setInterval(getMeteo, 30000);	

$(document).ready(function() {
	getMeteo();
});
