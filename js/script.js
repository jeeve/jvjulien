String.prototype.replaceAll = function(search, replacement) {
    var target = this;
    return target.replace(new RegExp(search, 'g'), replacement);
};	

$(document).ready(function() {
	$('a').filter(function() {
		return this.hostname && this.hostname != location.hostname &&
						this.hostname.indexOf('http://jvjulien') == -1 && 
					//	document.location.href.indexOf('sommaire') == - 1 &&
                        $(this).children('img').length==0 && 
                        $(this).text().indexOf('@') == -1 && $(this).text().indexOf('contrib') == -1;
	}).addClass('external').attr("target","_blank");;

});