function getCommentaires() {
		$.ajax({
			url: "https://spreadsheets.google.com/feeds/list/1SmZbYjacC8YWSgTnOWOAqsN8DzZOunedhifsXO4iO_s/od6/public/values?alt=json",
			type: 'GET',
			crossDomain: true,
			dataType: 'json'
		}).then(function(data) {
				var ligne;
				var dateheure, nom, commentaire, laDate;
				var ligneHtml, html;
				var node = document.getElementById("tableCommentaires");
				html = "<table>";
				for (i=0; i < data.feed.entry.length; i++) {
					ligneHtml = "<tr>";
					ligne = data.feed.entry[i];
					dateheure = ligne.title.$t;
					laDate = dateheure.substring(0, dateheure.search(' '));
					nom = ligne.gsx$nompseudo.$t;
					commentaire = ligne.gsx$commentaire.$t;
					ligneHtml = ligneHtml + "<td>" + laDate + "</td>";
					ligneHtml = ligneHtml + "<td>" + nom + "</td>";
					ligneHtml = ligneHtml + "<td>" + commentaire + "</td>";					
					ligneHtml = ligneHtml + "</tr>";
					html = html + ligneHtml;
				}
				html = html + "</table>";
				node.innerHTML = html;
			});
}

$(document).ready(function() {
	getCommentaires();
});
