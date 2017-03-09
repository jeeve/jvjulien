function getMeteo() {
		$.ajax({
			url: "https://meteo-station.herokuapp.com/temps-reel.php",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
			$('#vitesse-vent').text(data.vitesseVent);
			$('#temperature-air').text(data.temperatureAir);
			$('#temperature-eau').text(data.temperatureEau);
			});
}

$(document).ready(function() {
	getMeteo();	
	setInterval(getMeteo, 1800000)	
});
