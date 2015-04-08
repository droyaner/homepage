<div id="content">
	<h1>Ferienwohung</h1>
		<p>
			Die schöne, abgeschlossene und  harmonisch eingerichtete Ferienwohnung (75 m&sup2; für 
			2 Personen) im Erdgeschoß liegt am Waldrand von Pappenheim.
			<br>
		</p>
		<p>
			- Schlafzimmer mit Doppelbett
			<br>
			- Wohnzimmer
			<br>
			- Esszimmer mit Wohnküche
			<br>
			- Bad mit Dusche
			<br>
			- Terrasse mit Gartenanteil und Liegewiese
			<br>
			- Abschließbarem Abstellraum
			<br>
			- Parkmöglichkeit direkt vor dem Haus
    </p>
	<!-- Start genarating Gallery -->
	<section id="examples" class="examples-section">
		<div class="container">
			<div class="image-row">
				<div class="image-set">
					<?php 
					$xmlFile = './config/wohnung.xml'; 

						if (file_exists($xmlFile)) { 
						    $xml = simplexml_load_file($xmlFile); 

						    foreach ( $xml->image as $user )   
							{   
							  $text = $user->text;
							  $url = $user->url;	
							  $urlResize = $user->resize;
							  echo ' <a class="example-image-link" href= '.$url.' data-lightbox="example-set" data-title= '.$text.' ><img class="example-image" src= '.$urlResize.'  alt=""/></a>';
						    
							}   
							 
						} else { 
						    exit("Datei $xmlFile kann nicht geöffnet werden."); 
						} 
						?>
					</div>
				</div>
			</div>
		</section>
	<!-- End genarating Gallery -->

  </div>
