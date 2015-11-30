<?php
function generateLightBoxGalleryWohnung ($xmlPath){

	generateLightBoxGallery ($xmlPath,"wohnung");
}

function generateLightBoxGalleryStart ($xmlPath){

	generateLightBoxGallery ($xmlPath,"start");
}

function generateLightBoxGallery ($xmlPath,$site){

// entweder wohnung oder start
	echo '<!-- Start genarating Gallery -->';
	echo '<section id="examples" class="examples-section">';
	echo '<div class="container">';
	echo '<div class="image-row">';
	echo '<div class="image-set">';
		if (file_exists($xmlPath)) { 
			$xml = simplexml_load_file($xmlPath); 

			foreach ( $xml->image as $user ){   
				$text      = $user->text;
				$url       = $user->url;	
				$urlResize = $user->resize;
				$alt 	   = $user->alt;

				if(strcmp("start",$site ) == 0){
					echo ' <a class="example-image-link" href= '.$url.' data-lightbox="example-set" data-title= '.$text.' ><img class="example-image-start" src= '.$urlResize.'  alt='.$alt.'/></a>';

				}elseif(strcmp("wohnung",$site ) == 0){
					echo ' <a class="example-image-link" href= '.$url.' data-lightbox="example-set" data-title= '.$text.' ><img class="example-image" src= '.$urlResize.'  alt='.$alt.'/></a>';
				}
						    
			}   
							 
		} else { 
			echo '<p>';
			echo 'Dont find the xml-File';
			echo '</p>';
			exit("Datei $xmlPath kann nicht geöffnet werden."); 
		} 
	echo '</div>';
	echo'</div>';
	echo'</div>';
	echo'</section>';
	echo'<!-- End genarating Gallery -->';
}
?>
