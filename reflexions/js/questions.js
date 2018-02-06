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
				question = ligne.gsx$votrequestion.$t;
				node.innerHTML = '<p>La question du jour de ' + nom + ' : ' + question + '<br><a href="https://docs.google.com/forms/d/e/1FAIpQLSdm50yNnhBLyAku2Z2QuQ6UY7OU2QA6JWtAk9lRhMI3NmUV0A/viewform?usp=sf_link" target="_blank">Posez votre question <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a></p>';
			});
}

$(document).ready(function() {
	getQuestion();
});
