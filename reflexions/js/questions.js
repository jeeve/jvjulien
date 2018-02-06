function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

function getQuestion() {
		$.ajax({
			url: "https://spreadsheets.google.com/feeds/list/1M2Fe51WZl598zw2sx3iQC0UrHlIczLKJ6Yi15yPoTrs/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json',
			async: false
		}).then(function(data) {
				var ligne;
				var nom, question;
				var node = document.getElementById("ligne-question");
				var i = getRandomInt(data.feed.entry.length);
				ligne = data.feed.entry[i];
				nom = ligne.gsx$nompseudo.$t;
				question = ligne.gsx$votrequestion.$t;
				node.innerHTML = '<p>La question du jour de ' + nom + ' : <b>' + question + '</b><br><a href="https://docs.google.com/forms/d/e/1FAIpQLSdm50yNnhBLyAku2Z2QuQ6UY7OU2QA6JWtAk9lRhMI3NmUV0A/viewform?usp=sf_link" target="_blank">Posez votre question <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></p>';
				return question;
			});
}

function getReponses(question) {
		$.ajax({
			url: "https://spreadsheets.google.com/feeds/list/1g7ZtQOYmo2FoewC9x8fgwhD-ll6hZPP7yrSp4UPxkqc/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne;
				var dateheure, nom, votreQuestion, reponse;
				var ligneHtml, html;
				var node = document.getElementById("table-reponses");
				html = "<table>";
				for (i=data.feed.entry.length-1; i >= 0 ; i--) {
					ligneHtml = "<tr>";
					ligne = data.feed.entry[i];
					dateheure = ligne.title.$t;
					nom = ligne.gsx$nompseudo.$t;
					votreQuestion = ligne.gsx$question.$t;
					if (votreQuestion == question) {
						reponse = ligne.gsx$votreréponse.$t;
						ligneHtml = ligneHtml + "<td>" + dateheure + "</td>";
						ligneHtml = ligneHtml + "<td>" + nom + "</td>";
						ligneHtml = ligneHtml + "<td>" + reponse + "</td>";					
						ligneHtml = ligneHtml + "</tr>";
						html = html + ligneHtml;
					}
				}
				html = html + "</table>";
				node.innerHTML = html;
			});
}


$(document).ready(function() {
	var question = getQuestion();
	getReponses(question);
});
