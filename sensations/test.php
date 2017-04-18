<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>lac de Léry Poses</title>
   </head>
   <body>
	<?php include("../includes/footer.php"); ?>
      <script> 
        
	$.ajax({
    type: "POST",
	data: jQuery.param({ S_Spot: "Lery-Poses", S_SelectedDate : "2015-04-13", S_StartHour : '13:00', S_EndHour: '17:00' }), 
    dataType: 'text',
    url: 'http://mywindstats.com/windrose',
    crossDomain : true,
    xhrFields: {
        withCredentials: true
    }
})
    .done(function( data ) {
        console.log("done");
    })
    .fail( function(xhr, textStatus, errorThrown) {
        alert(xhr.responseText);
        alert(textStatus);
    });
	
		// mywindstats();
        
		 
		 
function mywindstats()
{
    
    // Les données seront envoyées sous forme d'adresse GET grâce à la variable data
    data = 'S_Spot='+escape('Lery-Poses')+'&S_SelectedDate='+escape('2015-04-13')+'&S_StartHour='+escape('13:00')+'&S_EndHour='+escape('17:00')+'';
     
    // XMLHttpRequest
    var xhr;
    if (window.XMLHttpRequest) xhr = new XMLHttpRequest();
    else if (window.ActiveXObject) xhr = new ActiveXObject('Microsoft.XMLHTTP');
    else
    {
        alert('Ce navigateur ne supporte pas XMLHttpRequest');
        return;
    }
     
    xhr.open('POST','http://mywindstats.com/windrose',true); // La page qui traitera les données en POST
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send(data); // Les données à envoyer
     
    xhr.onreadystatechange = function()
    {
        if (xhr.readyState == 4)
        {
            // La variable xhr.responseText contient la réponse de la page2.php
            // Ici j'enregistre la réponse dans la variable traitement.
            traitement = xhr.responseText;
			console.log(traitement);
        }
    }
}
      </script>
   </body>
</html>

