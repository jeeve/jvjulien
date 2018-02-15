function getRandomInt(max) {
  return Math.floor(Math.random() * Math.floor(max));
}

function getQuestion() {
		$.ajax({
			url: "https://spreadsheets.google.com/feeds/list/1M2Fe51WZl598zw2sx3iQC0UrHlIczLKJ6Yi15yPoTrs/default/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne;
				var nom, question;
				var node = document.getElementById("ligne-question");
				var i = getRandomInt(data.feed.entry.length);
				ligne = data.feed.entry[i];
				nom = ligne.gsx$nompseudo.$t;
				if (nom == "") {
					nom = "anonyme";
				}
				question = ligne.gsx$votrequestion.$t;
				node.innerHTML = '<p><u>La question du jour de ' + nom + '</u> : <b>' + question + '</b><br><a href="https://docs.google.com/forms/d/e/1FAIpQLSfcCrNawvdiorWRtXlkL16VHePNTI47YPe8UmTwGDMVWOoQcQ/viewform?usp=pp_url&entry.1388707615=' + question + '&entry.664735575&entry.115939093" target="_blank">Votre réponse <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>, <a href="https://docs.google.com/forms/d/e/1FAIpQLSdm50yNnhBLyAku2Z2QuQ6UY7OU2QA6JWtAk9lRhMI3NmUV0A/viewform?usp=sf_link" target="_blank">Posez une question <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></p>';
				getReponses(question);
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
				var node = document.getElementById("lignes-reponses");
				html = "<p><ul>";
				for (i=0; i < data.feed.entry.length; i++) {
					ligne = data.feed.entry[i];
					dateheure = ligne.title.$t;
					nom = ligne.gsx$nompseudo.$t;
					if (nom == "") {
						nom = "anonyme";
					}
					votreQuestion = ligne.gsx$question.$t;
					if (votreQuestion == question) {
						reponse = ligne.gsx$votreréponse.$t;
						/*
						ligneHtml = ligneHtml + "<td>" + dateheure + "</td>";
						ligneHtml = ligneHtml + "<td>" + nom + "</td>";
						ligneHtml = ligneHtml + "<td>" + reponse + "</td>";					
						ligneHtml = ligneHtml + "</tr>";
						*/
						ligneHtml = "<li><u>" + nom + " répond</u> : " + reponse + "</li>";
						html = html + ligneHtml;
					}
				}
				html = html + "</ul></p>";
				node.innerHTML = html;
			});
}


$(document).ready(function() {
	getQuestion();
});
