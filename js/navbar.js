// gère l'activation du menu

$(document).ready(function() { 
	$('li').filter(function() {
		if ($(this).children('a').length != 0)
				{
					url = document.location.href; 
					dir = url.substring(0, url.lastIndexOf('/')); // .../loire
					dir = dir.substring(dir.lastIndexOf('/') + 1); // loire
					href = $(this).children('a')[0].getAttribute('href');
					return href.indexOf(dir) > 0; 
				}
				else
				{
					return false;
				}				
	}).addClass('active');
});