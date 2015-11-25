<?php
 if(isset($_GET["section"])){ 
                $section = $_GET["section"]; 
        }else{ 
                $section = ""; 
        } 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
<!DOCTYPE html>
<html lang="de">
-->
<head>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla%7CMontserrat:700"/>
	<link href="./css/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/lightbox.css"/>

	<!-- Kalender -->
	<script type="text/javascript" src="js/view.js"></script>
	<script type="text/javascript" src="js/calendar.js"></script>

	<!-- Gallery -->
 	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="js/lightbox.js"></script>

        <script type="text/javascript">
        	var _gaq = _gaq || [];
        	_gaq.push(['_setAccount', 'UA-2196019-1']);
        	_gaq.push(['_trackPageview']);

        	(function() {
                	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        	})();
        </script>


	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Ferienwohnung Pappenheim - Die schöne, abgeschlossene und harmonisch eingerichtete Ferienwohnung im Erdgeschoß liegt
					  am Waldrand von Pappenheim. Sie besteht aus Wohnküche, Wohnzimmer mit direktem Zugang zu überdachter Terrasse 
					  und Garten, Schlafzimmer, Dusche und WC"/>
        <meta name="keywords" content="Naturpark Altmühltal, Seenland"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<meta name="language" content="de"/>
	<meta name="keywords" content="Pappenheim,Ferienwohnung,Franken"/>
	<title>Ferienwohnung Pappenheim - Treu</title>
	<!-- nicht mehr als 255 Zeichen -->
	<meta name="robots" content="index,follow"/>
	<meta name="audience" content="alle"/>
	<meta name="page-topic" content="Tourismus"/>
</head>

<body>


<div class="backdrop"></div>
<div id="container">
  <div id="topimg">
  </div>
    <?php include("menu.php")?>	
  <div style="clear:both;"></div>

  <?php include("sites.php")?>

  <?php include("footer.php"); ?>

</body>
</html>
