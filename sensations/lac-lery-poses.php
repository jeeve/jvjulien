<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>lac de Léry Poses</title>
      <META NAME="Description" CONTENT="Le lac de Léry Poses."/>
	  <?php include("../includes/header.php"); ?>	
	  <style type="text/css">
		.back {
			position: absolute;
			bottom: 0px;
			background-color: white;
			width: 50px;
			height: 30px;
  filter: alpha(opacity=60);
  /* IE */
  -moz-opacity: 0.6;
  /* Mozilla */
  opacity: 0.6;
  /* CSS3 */
			}
		figcaption {
			position: absolute;
			bottom: 0px;
			}
		figure {
			position:relative;
			}
		label {
			display: block;
			width: 160px;
			float: left;
			font-weight: normal;
		}
	  </style>
   </head>
   <body>
      <div class="page-container">
         <!-- top navbar -->
	     <?php include("../includes/navbar.php"); ?>	  
         <div class="container">
            <div class="row row-offcanvas row-offcanvas-left">
               <!-- sidebar -->
			   <?php include("../includes/sidebar.php"); ?>		
               <!-- main area -->
               <div class="col-xs-12 col-sm-12 col-md-9 fond">
                  <h1>lac de Léry Poses</h1>
					<br>
					
					<div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
				  <iframe id="WLPVantagePro" src="http://meteocamtroislacs.dtdns.net/axis-cgi/mjpg/video.cgi?resolution=800x600&amp;compression=30&amp;camera=1" scrolling="no" width="800" height="600" frameborder="0" style="margin-left: -5px; margin-top: -5px;"></iframe>
				  </div>
				  <p class="legende">En direct du lac de Léry-Poses (<a href="http://windsurf-lery-poses.soforums.com" target="_blank">et ses passionnés</a>)
				  </p>
				  
				  <br><br><br>
				 				  
				  <div class="row">
					<div class="col-xs-12 col-sm-2"></div>
					<div class="col-xs-12 col-sm-8">
						<div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17454.995066904972!2d1.2294165352311524!3d49.29599766103288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1488211223091" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>	
					</div>
				  </div>

				  <br><br><br><br>
				  
				  <div class="row">
					<div class="embed-responsive embed-responsive-4by3 ombre-image">
						<iframe id="meteo" src="http://www.weatherlink.com/user/troislacs/index.php?view=summary&amp;headers=1" width="770" height="800" frameborder="0" style="overflow-x: auto; overflow-y: hidden;"></iframe>				  
					</div>
					<p id="vitesse-vent"></p>
				  </div>
				
				<br><br>
				<h2>Prévisions méteo</h2>
					<iframe src="http://www.windguru.cz/int/distr_iframe.php?u=196518&s=4864&c=4a30721b47&lng=fr" width="500" height="230" frameborder="0" style="overflow-x: auto; overflow-y: auto;"></iframe>
				  <br>
				  <br>
				  <h2>Archives webcam</h2>
					
					<form id="datetimeform">
						<p>
						<label for="ma-date">Date (JJ-MM-AAAA)</label><input id="ma-date" type="text" name="date" value="25-02-2017"></input><br>
						<label for="mon-heure1">entre (HH:MM)</label><input id="mon-heure1" type="text" name="heure1" value="12:00"></input><br>
						<label for="mon-heure2">et (HH:MM)</label><input id="mon-heure2" type="text" name="heure2" value="17:00"></input><br>
						<label for="mon-delta">toutes les</label><input id="mon-delta" type="text" name="delta" value="15"></input> minutes
						<button type="button" onclick="getpicture()">Afficher</button>
						</p>
					</form>
					<br>
					<div id="pictureform">
					</div>
					
<br><br>
<div id="swipe" class="row">
<div class="col-xs-5"><p><a href="sensations.php">sensations</a> - <a id="page-precedente" href="windsurf-kitesurf.php">windsurf / kitesurf</a></p></div>
<div class="col-xs-7">
<p align="right"><a id="page-suivante" href="powerkite.php">powerkite</a> - <a href="../emotions/emotions.php">émotions</a></p>
</div>
<p class="numero-page">page 14</p>	
<br><br>
</div>					

				</div>
            <!--/.row-->
         </div>
         <!--/.container--></div>
      </div>
      <!--/.page-container-->
	  <?php include("../includes/footer.php"); ?>	

	  <script> 
	
	  $(document).ready(function($) {
		var hier = new Date(new Date().setDate(new Date().getDate()-1));
		var annee   = hier.getFullYear();
		var mois    = hier.getMonth() + 1;
		var jour    = hier.getDate();
		$("#ma-date").attr("value", jour + "-" + mois + "-" + annee);
/*		
    $("#meteo").load(function() {
        var doc = this.contentDocument || this.contentWindow.document;
        var target = doc.getElementById("mainContainer");
		target.innerHTML = "Found It!";	
	  });
*/ 
	  });
	  </script>

	  <script type="text/javascript" src="js/imagebankleryposes.js"></script>	
   </body>
</html>