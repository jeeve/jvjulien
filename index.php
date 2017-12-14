<!DOCTYPE html>
<html lang="fr">
   <head>
      <title>Au gré du vent 1.0</title>
      <META NAME="Description" CONTENT="Au travers de textes et de photos perso, ces pages sont une invitation au rêve. Sensible aux visages de la nature, je propose une petite balade en sa compagnie."/>
	  <?php include("includes/header.php"); ?>	
	  <link href="/css/fond-etoile.css" rel="stylesheet">
	  <link href="/css/index.css" rel="stylesheet">	
   </head>
   <body id="swipe" >
      <div class="page-container">
      <!-- top navbar -->
      <?php include("includes/navbar.php"); ?>
	  
      <div class="container">
         <div class="row row-offcanvas row-offcanvas-left">
            <!-- sidebar -->
            <?php include("includes/sidebar.php"); ?>

            <!-- main area -->
            <div class="col-xs-12 col-sm-12 col-md-9 fond">
               <br><br><br> 
               <div class="row">
                  <div id="main-col" class="col-xs-12 col-sm-12 col-md-10 fond">	
					 <div class="wrapper">
						<a href="sommaire/sommaire.php">
						<div id="lake-div" class="encadrement-table fond-table">
						<img class="img-responsive center-block" src="images/home.jpg" alt="Les Ebihens, Saint-Jacut de la Mer"> 
						<img class="img-responsive center-block" src="images/home-lake.jpg" style="display: none;"> 
						</div>
						<div class="overlay">	
							<p style="text-align: right;"><span class="opacite">au gré du vent </span><span class="opacite2">1.0</span></p>
						</div>
						</a>
					</div>
               </div>
			   </div>
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-10 fond">
                     <p align="right"><br>
                        <a id="page-suivante" href="sommaire/sommaire.php">en route...</a>
                     </p>
                  </div>
               </div>
            </div>
            <!--/.row-->
         </div>
         <!--/.container-->
      </div></div>
      <!--/.page-container-->
      <?php include("includes/footer.php"); ?>
	  <script src="/js/lake.js"></script>
	  <script>
(function(w,d,s,i,n){w[n]=w[n]||{q:[],init:function(o){w[n].initOpts=o;},ready:function(c){w[n].q.push(c);}};
setTimeout(function(j,k){if(!d.getElementById(i)){k=d.getElementsByTagName(s)[0];j=d.createElement(s);j.id=i;
j.src="https://cdn.by.wonderpush.com/sdk/1.1/wonderpush-loader.min.js";k.parentNode.insertBefore(j,k);}},0);
}(window,document,"script","wonderpush-jssdk-loader","WonderPush"));

WonderPush.init({
    webKey: "9f7a6f276210232f5e9fdf72e24d876e170cd80ebd8eddda462eeb69a3fe0355",
    optInOptions: {
        // Vous pouvez modifier ou traduire les chaînes suivantes :
        externalBoxMessage: "Nous aimerions vous envoyer des notifications",
        externalBoxExampleTitle: "Notification exemple",
        externalBoxExampleMessage: "Ceci est un exemple de notification",
        externalBoxDisclaimer: "Vous pouvez vous désinscrire à n'importe quel moment.",
        externalBoxProcessingMessage: "Inscription en cours...",
        externalBoxSuccessMessage: "Merci de vous être inscrit !",
        externalBoxFailureMessage: "Désolé, un problème est survenu.",
        externalBoxTooLongHint: "Mauvaise connexion ou navigation privée ?",
        externalBoxCloseHint: "Fermer",
        modalBoxMessage: "Recevez désormais nos news en temps réel.<br/>Vous pouvez vous désinscrire à n'importe quel moment.",
        modalBoxButton: "J'ai compris !"
    }
});
</script>
   </body>
</html>