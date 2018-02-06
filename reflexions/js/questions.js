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
				node.innerHTML = "<p>La question du jour de " + nom + " : " + question + "</p>";
			});
}

$(document).ready(function() {
	getQuestion();
});
