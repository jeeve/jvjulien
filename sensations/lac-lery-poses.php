<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>lac de Léry Poses</title>
      <META NAME="Description" CONTENT="Le lac de Léry Poses avec webcam, archives, météo en temps réel et prévisitions, lien vers l'association WLPA."/>
	  <?php include("../includes/header.php"); ?>	
	<link href="css/lac-lery-poses.css" rel="stylesheet">
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
                     <iframe id="WLPVantagePro" src="http://meteocamtroislacs.dtdns.net/axis-cgi/mjpg/video.cgi?resolution=1024x768&amp;compression=30&amp;camera=1" scrolling="no" width="1024" height="768" frameborder="0"></iframe>                  
				  
				  <div id="fond-meteo"></div>
				  
				  <table id="meteo">
					<tr>
						<td><p>Vitesse du vent </p></td>
						<td><p id="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation du vent </p></td>
						<td><p id="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Température de l'air </p></td>
						<td><p id="temperature-air"></p></td>
					</tr>
					<tr>
						<td><p>Température de l'eau </p></td>
						<td><p id="temperature-eau"></p></td>
					</tr>			
				</table>
			  
				  </div>
                  <p class="legende">En direct du lac de Léry-Poses (<a href="http://windsurf-lery-poses.soforums.com" target="_blank">et ses passionnés - association WLPA</a>)
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
                  <br><br><br>			  
				  
                  <h2>Prévisions méteo</h2>
				  <div class="row">
					<div class="col-xs-12 visible-xs fond" style="margin-left: 15px;">
						<a href="https://www.windguru.cz/4864" target="_blank"><img class="ombre-image" src="images/logo-windguru.gif"></a>
					</div>
					<div class="hidden-xs col-sm-12">
						<iframe src="http://www.windguru.cz/int/distr_iframe.php?u=196518&s=4864&c=4a30721b47&lng=fr" width="520" height="230" frameborder="0" style="overflow-x: auto; overflow-y: auto; margin-left: 5px;"></iframe>
					</div>
				  </div>
					
				  <div class="row">	
					<!--
					<div class="visible-xs col-xs-12 fond" style="margin-left: 5px;">
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lake_des_deux_amants?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=1&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac des deux Amants</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
					</div>
					-->
					<div class="hidden-xs col-sm-12 fond" style="margin-left: 5px;">
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lake_des_deux_amants?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac des deux Amants</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
					</div>
				</div>	
				  		
                  <br>

                  <h2>Archives webcam</h2>
                  <form id="datetimeform">
                     
                        <div><p><label for="ma-date">Date (JJ-MM-AAAA)</label><input id="ma-date" type="text" name="date" value="25-02-2017"></input></p></div>
                        <div><p><label for="mon-heure1">entre (HH:MM)</label><input id="mon-heure1" type="text" name="heure1" value="12:00"></input></p></div>
                        <div><p><label for="mon-heure2">et (HH:MM)</label><input id="mon-heure2" type="text" name="heure2" value="17:00"></input></p></div>
                        <div><p><label for="mon-delta">toutes les</label><input id="mon-delta" type="text" name="delta" value="30"></input> minutes
                        <button type="button" onclick="getpicture()">Afficher</button></p></div>
                
                  </form>
                  <br>
                  <div id="pictureform">
                  </div>
                  <br><br>
				  <div id="swipe">
					<div class="row">
						<div class="col-xs-5">
							<p><a href="sensations.php">sensations</a> - <a id="page-precedente" href="windsurf-kitesurf.php">windsurf / kitesurf</a></p>
						</div>
						<div class="col-xs-7">
							<p align="right"><a id="page-suivante" href="powerkite.php">powerkite</a> - <a href="../emotions/emotions.php">émotions</a></p>
						</div>
					</div>
					<div class="row">
						<p class="numero-page">page 14</p>
						
					</div>
                  </div>
               </div>
               <!--/.row-->
            </div>
            <!--/.container-->
         </div>
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
		 getpicture();
         });
      </script>
	  <script type="text/javascript" src="js/meteo.js"></script>
      <script type="text/javascript" src="js/imagebankleryposes.js"></script>	
   </body>
</html>

