$(document).ready(function() {
	$('a').filter(function() {
		return this.hostname && this.hostname != location.hostname &&
						this.hostname.indexOf('http://jvjulien') == -1 && 
					//	document.location.href.indexOf('sommaire') == - 1 &&
                        $(this).children('img').length==0 && 
                        $(this).text().indexOf('@') == -1 && $(this).text().indexOf('contrib') == -1;
	}).addClass('external').attr("target","_blank");;

});