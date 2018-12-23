<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Lac de Léry-Poses</title>
      <META NAME="Description" CONTENT="Le lac de Léry Poses avec webcam, archives, météo en temps réel et prévisions, lien vers l'association WLPA et site de covoiturage."/>
	  <?php include("../includes/header.php"); ?>	
	  <link rel="stylesheet" href="css/jquery-ui.min.css">
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
			   
			   <h1>Lac de Léry-Poses</h1>

               <div class="row">
			   
  <div class="col-xs-12 col-sm-8 fond">
    <br>
	<p>A13 près de Louviers, <a href='https://www.viewsurf.com/univers/trafic/vue/3254-france-haute-normandie-heudebouville-a13-pres-de-louviers-peage-de-heudebouville-vue-orientee-vers-le-havre-ou-caen' target="_blank">Péage de Heudebouville</a>, vue orientée vers Le Havre ou Caen</p>  

  <div class="embed-responsive embed-responsive-16by9 ombre-image">
	<video id="videojs-viewsurf_html5_api" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay="">
    </video>
  </div>	
  
  <div class="visible-xs"><br></div>
  </div> 
  
  
  
   <div class="col-xs-1"></div>

				  <div class="col-xs-10 col-sm-3 fond-table encadrement-table">
				  <table>
					<tr>
						<td><p>Vitesse vent </p></td>
						<td><p id="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td>
						<td><p id="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td>
						<td><p id="temperature-air"></p></td>
					</tr>
					<!--
					<tr>
						<td><p>Eau </p></td>
						<td><p id="temperature-eau"></p></td>
					</tr>
-->					
					<tr>
						<td colspan=2><p style="text-align: right; font-size: 10px;">Données temps réel <em><a id="nom-sation" href="https://www.weatherlink.com/map/33782285-df4e-4432-a3b3-06ddf1b3680a" target="_blank"></a></em></p></td>
					</tr>						
				</table>
				</div>
											
				</div>			   
	
 

<!--			   
			    <div class="row">
				<div class="col-xs-4">
                  <h1>Lac de Léry-Poses</h1>
				</div>
				<div class="col-xs-8">	
				  <p style="text-align:right;">
				  <a href="#commentaires">Un commentaire sur cette page, une suggestion, un problème... <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
				  </p>
				 </div>
				</div> 
-->				 
                  <br>
<!--				  
<?php
if (!(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE)) {				  
?>				  
                  <div id="webcam">
					<a href="http://meteocamtroislacs.dtdns.net/view/viewer_index.shtml?id=28442" target="_blank">
                     <img id="webcam-image" src="http://meteocamtroislacs.dtdns.net/mjpg/video.mjpg" width="1024px" height="576px" class="img-responsive ombre-image">                  
					</a> 
					
					<div class="hidden-xs">
				  
				  <div id="fond-meteo"></div>
				  
				  <table id="meteo">
					<tr>
						<td><p>Vitesse vent </p></td>
						<td><p id="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation </p></td>
						<td><p id="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Air </p></td>
						<td><p id="temperature-air"></p></td>
					</tr>
					<tr>
						<td><p>Eau </p></td>
						<td><p id="temperature-eau"></p></td>
					</tr>					

				</table>
				  </div>
				  
				  <div class="visible-xs">
				  <div id="fond-meteo-xs"></div>
				  <table id="meteo-small">
					<tr>
						<td><p>Vent </p></td>
						<td><p id="vitesse-vent-s"></p></td>
						<td><p>Orientation </p></td>
						<td><p id="orientation-vent-s"></p></td>
						<td><p>Air </p></td>
						<td><p id="temperature-air-s"></p></td>
						<td><p>Eau </p></td>
						<td><p id="temperature-eau-s"></p></td>						
					</tr>
				</table>				  
				  </div>
				  
				  </div>
<?php				  
} else {
?>				
                
				  <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
                     <iframe id="WLPVantagePro" src="http://meteocamtroislacs.dtdns.net/axis-cgi/mjpg/video.cgi?resolution=1024x768&amp;compression=30&amp;camera=1" scrolling="no" width="1024" height="768" frameborder="0"></iframe>                  
                  
				  <div id="fond-meteo-ie"></div>
				  
				  <table id="meteo-ie">
					<tr>
						<td><p>Vitesse vent </p></td>
						<td><p id="vitesse-vent"></p></td>
					</tr>
					<tr>
						<td><p>Orientation vent </p></td>
						<td><p id="orientation-vent"></p></td>
					</tr>				
					<tr>
						<td><p>Température air </p></td>
						<td><p id="temperature-air"></p></td>
					</tr>

				</table>
			  
				  </div>
				
			
<?php
}
?>			  
-->				  
                  <p class="legende">En direct du lac de Léry-Poses et <a href="http://windsurf-lery-poses.soforums.com" target="_blank">ses passionnés</a> - <a href="http://wlpa.e-monsite.com/" target="_blank">association WLPA <img src="images/logo-wlpa.png"></a> - <a href="http://www.kiffmembers.org/" target="_blank">le covoiturage <img  height="60" src="images/logo-kiffmembers.gif"></a>
                  </p>
                  
				  
				  <br><br>
                  <div class="row">
                    <!-- <div class="col-xs-12 col-sm-2"></div> -->
                     <div class="col-xs-12 col-sm-6 fond">
                        <div class="embed-responsive embed-responsive-4by3 ombre-image" style="background-image: none; background-color: black;">
                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d17454.995066904972!2d1.2294165352311524!3d49.29599766103288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sfr!2sfr!4v1488211223091" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
						<p class="legende">Situation géographique</p>
						
						<p class="legende">Le spot sur <a href="http://windsurf-sessions.eg2.fr/detail_spot.php?id_spot=231" target="_blank">My wind session</a></p>
					</div>
						
						<div class="col-xs-12 col-sm-6 fond">
							<a href="images/spots-lery-poses.jpg" target="_blank">
							<img src="images/spots-lery-poses.jpg" class="img-responsive ombre-image" alt="Les mises à l'eau en fonction du vent" title="Les mises à l'eau en fonction du vent">
							</a>
							<p class="legende">Les mises à l'eau</p>
						</div>
                    
                  </div>

                  <br><br>			  
				  
                  <h2>Prévisions méteo</h2>
				  
		  
				  <div class="row">				  		

					<div class="hidden-xs col-sm-8" style="margin-left: 5px;">
						<div class="fond-table encadrement-table" style="width: 540px;">
						<div style="width:520px;overflow:auto;"><iframe align="top" src="https://widgets.windalert.com/widgets/web/modelTable?spot_id=33126&amp;units_wind=kts&amp;units_temp=C&amp;type=daily&amp;width=5830&amp;height=310&amp;color=f1eeee&amp;name=Poses&amp;app=windalert" width="5830" height="310" frameborder="0" scrolling="no" allowtransparency="no"></iframe></div>
						<script type="text/javascript" src="https://www.windfinder.com/widget/forecast/js/lake_des_deux_amants?unit_wave=m&unit_rain=mm&unit_temperature=c&unit_wind=kts&columns=2&days=4&show_day=1&show_pressure=0&show_waves=0"></script><noscript><a rel='nofollow' href='https://www.windfinder.com/forecast/lake_des_deux_amants?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-forecast'>Wind forecast for Lac des deux Amants</a> provided by <a rel='nofollow' href='https://www.windfinder.com?utm_source=forecast&utm_medium=web&utm_campaign=homepageweather&utm_content=noscript-logo'>windfinder.com</a></noscript>
<!--						<iframe src="http://www.windguru.cz/int/distr_iframe.php?u=196518&s=4864&c=4a30721b47&lng=fr" width="520" height="238" frameborder="0" style="overflow-x: auto; overflow-y: auto; margin-left: 5px;"></iframe>
-->
<script id="wg_fwdg_4864_3_1544556530603">
(function (window, document) {
  var loader = function () {
    var arg = ["s=4864","m=3","uid=wg_fwdg_4864_3_1544556530603","wj=knots","tj=c","odh=7","doh=21","fhours=240","vt=forecasts",
   "p=WINDSPD,GUST,MWINDSPD,SMER,TMPE,FLHGT,CDC,APCPs,RATING"];
    var script = document.createElement("script");
    var tag = document.getElementsByTagName("script")[0];
    script.src = "https://www.windguru.cz/js/widget.php?"+(arg.join("&"));
    tag.parentNode.insertBefore(script, tag);
  };
  window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload", loader);
})(window, document);
</script>
						</div>		
					</div>

					<div class="hidden-xs col-sm-2" style="margin-left: 65px;">
						<div class="fond-table encadrement-table" style="width: 150px;">
							<p>	
							<a href="https://www.ventusky.com/?p=49.39;0.90;8&l=wind-10m" target="_blank">Ventusky</a><br><br>
							<a href="https://fr.windfinder.com/weatherforecast/lake_des_deux_amants" target="_blank">Superforecast</a><br><br>
							<a href="http://www.xcweather.co.uk/forecast/L%C3%A9ry_poses" target="_blank">XCWeather</a><br><br>
							<a href="http://www.meteofrance.com/previsions-meteo-france/val-de-reuil/27100" target="_blank">Météo France</a>
							</p>
						</div>		
					</div>
										<div class="col-xs-12 hidden-xs fond">
						<br><br>
					</div>
					
				</div>					  
				
				<div class="row">
					<div class="visible-xs col-xs-12 fond">
						<div class="fond-table encadrement-table">
						<a href="http://www.windalert.com/map#49.299,2.002,9,1,!33126,2" target="_blank"><img src="images/logo-windalert.jpg"></a>								
						<a href="https://fr.windfinder.com/weatherforecast/lake_des_deux_amants" target="_blank"><img src="images/logo-windfinder.png" alt="superforecast" title="superforecast"></a>	
						<a href="https://www.windguru.cz/4864" target="_blank"><img src="images/logo-windguru.gif"></a>
						<a href="https://www.ventusky.com/?p=49.39;0.90;8&l=wind-10m" target="_blank"><img src="images/logo-ventusky.png"></a>
						<a href="http://www.xcweather.co.uk/forecast/L%C3%A9ry_poses" target="_blank"><img src="images/logo-xcweather.png"></a>
						<a href="http://www.meteofrance.com/previsions-meteo-france/val-de-reuil/27100" target="_blank"><img src="images/logo-meteofrance.png"></a>
						</div>		
					</div>	
				</div>	

	<!--
	<br>
					<div class="row">
					<div class="visible-xs col-xs-12 fond" style="margin-left: 5px; margin-bottom:10px;">
						<a href="http://www.windalert.com/map#49.299,2.002,9,1,!33126,2" target="_blank">
							<img src="images/logo-windalert.jpg">
						</a>	
					</div>
					<div class="visible-xs col-xs-12 fond" style="margin-left: 5px; margin-bottom:20px;">
						<a href="https://fr.windfinder.com/weatherforecast/lake_des_deux_amants" target="_blank">
							<img src="images/logo-windfinder.png" alt="superforecast" title="superforecast">
						</a>	
					</div>
					<div class="col-xs-12 visible-xs fond" style="margin-left: 5px;">
						<a href="https://www.windguru.cz/4864" target="_blank"><img src="images/logo-windguru.gif"></a>
					</div>
					<div class="col-xs-12 visible-xs fond" style="margin-left: 0px;">
							<a href="https://www.ventusky.com/?p=49.39;0.90;8&l=wind" target="_blank"><img src="images/logo-ventusky.png"></a>		
					</div>
					<div class="col-xs-12 visible-xs fond" style="margin-left: 5px;">
							<a href="http://www.xcweather.co.uk/forecast/L%C3%A9ry_poses" target="_blank"><img src="images/logo-xcweather.png"></a>			
					</div>					
					<div class="col-xs-12 visible-xs fond" style="margin-left: 5px; margin-top: 5px;">
							<a href="http://www.meteofrance.com/previsions-meteo-france/val-de-reuil/27100" target="_blank"><img src="images/logo-meteofrance.png"></a>			
					</div>					
					<div class="col-xs-12 visible-xs fond">
						<br><br>
					</div>
					</div>	
-->
<!--
                  <h2>Historique</h2>
                  <form id="datetimeform">
                     
                        <div><p><label for="ma-date">Date <span style="color:grey">(JJ/MM/AAAA)</span></label><input id="ma-date" type="text" name="date" value="25/02/2017"></input></p></div>
                        <div><p><label for="mon-heure1">entre <span style="color:grey">(HH:MM)</span></label><input id="mon-heure1" type="text" name="heure1" value="10:00"></input></p></div>
                        <div><p><label for="mon-heure2">et <span style="color:grey">(HH:MM)</span></label><input id="mon-heure2" type="text" name="heure2" value="17:00"></input></p></div>
                        <div><p><label for="mon-delta">toutes les</label><input id="mon-delta" type="text" name="delta" value="60"></input> minutes
                        <button type="button" onclick="getHistorique()">Afficher</button>
						<button type="button" onclick="getTimelapse()">Créer timelapse (beta)</button>
						</p></div>
                
                  </form>
                  <br>
				  
				  <div class="row">
					<div class="col-xs-12 col-md-6 fond" id="historique-vent"></div>
					<div class="col-xs-12 col-md-6 fond" id="rose-vent"></div>
				  </div>	
				  
				  <div class="legende"><p><em><font size="2">graphiques issus du site <a href="http://mywindstats.com">mywindstats.com</a></font></em></p></div>
                  
				  <div id="pictureform">
                  </div>
                  <br>
				  
				  <p><em><font size="2">images issues du site <a href="http://imagebankleryposes.appspot.com/">imagebankleryposes.appspot.com</a></font></em></p>
				  <p><em><font size="2">
				  <ul>
				  <li>Les données météorologiques de Léry-Poses sont issues de la sonde de "troislacs - base de loisirs"</li>
				  <li>Les images sont issues de la caméra du Syndicat Mixte de la Base de Loisirs et Plein Air de Léry-Poses</li>
				  </ul>
				  </font></em></p>
-->				  
				  <br>
				  <h2>Sessions en vidéo</h2>

				  <br><a name="lery-poses-21-12-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-16by9 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/N-kvZVNrbKU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=218850" target="_blank">Un vendredi d'automne au Lac des Deux Amants, 21 décembre 2018</a>
				  Session très physique. Gréé trop gros. Un rider carbure en 6m². Un autre en flotteur gonflable. Grosse risée pendant 30 minutes. Plus de force pour lever la voile. Je réussi à rejoindre le bord tant bien que mal.
				  </p>
				  </div></div>
				  
				  <br><a name="lery-poses-2-12-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-16by9 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/oTTwy4dAZII?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=217931" target="_blank">
				  De la pluie, de la douceur et 3 micro plannings</a><br>
				  Bonne ambiance à terre avec chambrage en règle. Premier test de la caméra avec GPS : Verdict : Vmax à 21 noeuds...
				  </p>
				  </div></div>

				  <br><a name="lery-poses-13-10-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-16by9 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/Ihfz2P8uAJ4?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=215248" target="_blank">
				  Balade, cygnes, micro-plannings et autres gamelles, samedi 13 octobre 2018</a>
				  </p>
				  </div></div>
				  
				  <br><a name="lery-poses-11-10-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-16by9 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/dywEbCxmmi0?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=215139" target="_blank">
				  Un jeudi au soleil, 11 octobre 2018</a>
				  </p>
				  </div></div>
				  
				  <br><a name="lery-poses-21-09-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-16by9 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/JTd-HKdMfew?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=213684" target="_blank">
				  vendredi 21 septembre 2018</a>
				  </p>
				  </div></div>
				  
				  <br><a name="lery-poses-26-05-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/fsDiueE3WYw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=205532" target="_blank">
				  26 mai 2018</a><br>
				  La planche c'est cool !
				  </p>
				  </div></div>
				  
				  <br><a name="lery-poses-16-05-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/G1e040GygAU?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=204994" target="_blank">
				  16 mai 2018</a><br>
				  Ceci n'est pas un reportage animalier.
				  </p>
				  </div></div>
				  
				  <br><a name="lery-poses-10-05-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/aP1cxMEdWIM?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=204412" target="_blank">
				  jeudi 10 mai 2018</a><br>
				  Le jour où j'ai filmé Phil95.
				  </p>
				  </div></div>					  
				  
				  <br><a name="lery-poses-22-04-18"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/I4K38qxT47c?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?id_session=202905" target="_blank">
				  dimanche 22 avril 2018</a><br>
				  Caméra embarqué sur le wishbone.
				  </p>
				  </div></div>				  
				  
				  <br><a name="lery-poses-24-06-17"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/NI9sRobneb8?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?target=id_rider&id_rider=3185&id_session=183014" target="_blank">
				  samedi 24 juin 2017</a><br>
				  Session sous le soleil mais le vent est resté très timide. Petits planning au début. Spéciale dédicace au teeshirt de Roger. Le canard qui m'avait doublé lors d'une précédente navigation est venu me narguer pendant que je gréais, mais une fois sur l'eau, il rigolait moins.
				  </p>
				  </div></div>				  

				  <br><a name="lery-poses-26-05-17"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				 <iframe width="560" height="315" src="https://www.youtube.com/embed/oimKwqCOqWQ?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?target=id_rider&id_rider=3185&id_session=180514" target="_blank">
				  vendredi 26 mai 2017</a><br>
				  Du soleil, du vent, du monde sur l'eau...
				  </p>
				  </div></div>
				  
				  <br><a name="lery-poses-16-04-17"></a>
				  <div class="row">
				  <div class="col-xs-12 col-sm-2 fond"></div>
				  <div class="col-xs-12 col-sm-8 fond">
				  <p align="center">
				  <div class="embed-responsive embed-responsive-4by3 ombre-image">
				 <iframe width="560" height="315" src="https://www.youtube.com/embed/UMcsfIwQbbc?rel=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
				  </div>
				  </p>
				  <p class="legende">
					<a href="http://windsurf-sessions.eg2.fr/infos_session.php?target=id_rider&id_rider=3185&id_session=177119" target="_blank">
				  16 avril 2017</a><br>
				  Test de la V8 dans le vent léger
				  </p>
				  </div></div>				  		  
<!--			  
				  <a name="commentaires"></a>
				  <h2>Commentaires</h2>
				  <p>
				  <a href="https://goo.gl/forms/ZlDIbV7DJhXjArND3" target="_blank">Poster un commentaire <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a> 
				  </p>
				  
				   <br>
				 <div class="hidden-xs"> 
					<table id="tableCommentaires" class="table-commentaires"></table>
					<br>
				  </div>
-->	
				  <br>		  
			 
				  <div id="swipe">
					<div class="row">
						<div class="col-xs-7">
							<p><a href="sensations.php">sensations</a> - <a href="windsurf-kitesurf.php">windsurf / kitesurf</a> - <a id="page-precedente" href="spots-ile-de-france.php">les spots d'Ile-de-France</a></p>
						</div>
						<div class="col-xs-5">
							<p align="right"><a id="page-suivante" href="powerkite.php">powerkite</a> - <a href="../emotions/emotions.php">émotions</a></p>
						</div>
					</div>
					<div class="row">
						<p class="numero-page">page 14b</p>
						
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
	  <script type="text/javascript" src="js/commentaires.js"></script>	
	  <script src="js/jquery-ui.min.js"></script>
	  <script type="text/javascript" src="js/meteo2.js"></script>	  
      <script> 
	    function getWebCam() {
			$.ajax({
				url: 'https://meteo-station.herokuapp.com/webcam-heudebouville-src-video.php',
				type: 'GET',
				crossDomain: true,
				dataType: 'json'
			}).then(function(data) {
				console.log(data.src);
				$('#videojs-viewsurf_html5_api').replaceWith('<video id="videojs-viewsurf_html5_api" class="vjs-tech" tabindex="-1" preload="auto" loop="" muted="muted" playsinline="playsinline" autoplay="" src="' + data.src + '" ></video>');		
			});
		}
		
		var myCam = setInterval(getWebCam, 60000);	
	  
		station = "33782285-df4e-4432-a3b3-06ddf1b3680a";
		var myVar =	setInterval(getMeteo, 30000);		
        
		$(document).ready(function($) {
		getWebCam();	 
		getMeteo();
		
			if ($('#temperature-eau').html == "") {
				$('#temperature-eau').html("cf Roger");			
				$('#temperature-eau-s').html("cf Roger");				
			} 
			
		 
			 
		 if ($('#webcam-image').innerHeight() == 0 || ($('#webcam-image').innerHeight() == $('#webcam-image').innerWidth())) { // la webcam ne marche pas
			 $('#webcam-image').parent().html('<img id="webcam-image" src="images/mire.png" width="1024px" height="576px" class="img-responsive ombre-image">');
		 }

		 var estHier = false;
		 var maDate;
         var now = new Date();
		 if (now.getHours() < 11) {
			maDate = new Date(new Date().setDate(new Date().getDate()-1)); // hier	
			estHier = true;	
		 }
		 else
		 {
			maDate = new Date(new Date().setDate(new Date().getDate()-0)); // aujourd'hui
		 }
		 
         var annee   = maDate.getFullYear();
         var mois    = maDate.getMonth() + 1;
         var jour    = maDate.getDate();
		 var heure2 = maDate.getHours();
		 var minute2 = maDate.getMinutes();
		 
		 annee = annee.toString();
		 mois = mois.toString();
		 jour = jour.toString();
		 if (mois.length == 1) {
			 mois = "0" + mois;
		 }
		 if (jour.length == 1) {
			 jour = "0" + jour;
		 }
		 	 
         $( "#ma-date" ).datepicker({dateFormat:"dd/mm/yy",minDate:"13/04/2015",maxDate:new Date(),changeMonth:true,changeYear:true});
		 $( "#ma-date" ).datepicker( "setDate", jour + "/" + mois + "/" + annee); 
		 

		 if (heure2 > 18 || estHier) {
			heure2 = 18;
		 }
		 heure2 = heure2.toString();
		 minute2 = minute2.toString();
		 if (heure2.length == 1) {
			 heure2 = "0" + heure2;
		 }
		 if (minute2.length == 1) {
			 minute2 = "0" + minute2;
		 }
		 
		 $("#mon-heure2").val(heure2 + ':00');
		 
		 getHistorique();
         });
		 
		 function getHistorique() {
			getHistoriqueVent();
			getPictures();	 
		 }
      </script>
	  <script type="text/javascript" src="js/historique-vent.js"></script>
      <script type="text/javascript" src="js/imagebankleryposes.js"></script>
	  <script type="text/javascript" src="js/timelapse.js"></script>	  
   </body>
</html>

