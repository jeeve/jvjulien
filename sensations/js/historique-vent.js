
function getHistoriqueVent() {
	
	var curdate = "2017-05-05"; // document.getElementById("datetimeform")[0].value;
    var time1 = document.getElementById("datetimeform")[1].value;
	var time2 = document.getElementById("datetimeform")[2].value;
	
	var heuresminutes1 = time1.split(':');
	var heure1 = heuresminutes1[0];
	var minute1 = heuresminutes1[1];	
	var heuresminutes2 = time2.split(':');
	var heure2 = heuresminutes2[0];
	var minute2 = heuresminutes2[1];
	
	$.get("https://meteo-station.herokuapp.com/historique.php?graph=vitesse&date=" + curdate + "&heure-debut=" + heure1 + "&heure-fin=" + heure2, function(data) {
		$(".historique-vent").html(data); 
		});
		
	$.get("https://meteo-station.herokuapp.com/historique.php?graph=rose&date=" + curdate + "&heure-debut=" + heure1 + "&heure-fin=" + heure2, function(data) {
		$(".rose-vent").html(data); 
		});	
		
}
