$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
	$('html,body').animate({scrollTop: 0}, 'slow');
  });
  
  showHideBoutonMenu();
  $(window).scroll(showHideBoutonMenu);
  $(window).resize(showHideBoutonMenu);  
});	

function showHideBoutonMenu(event) {
   var st = $(this).scrollTop();
   if ((st <= 0) && ($('body').width() > 980)) {
       $('.navbar-toggle').addClass('hidden');
   } else {
       $('.navbar-toggle').removeClass('hidden');
   }	
}
