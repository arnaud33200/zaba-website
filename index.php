<?php
echo file_get_contents( "mainPhp/main_layout_top.php" ); 
?>

	<h1 class="uk-heading-primary">Home</h1>

	<div uk-grid>

		<div class="uk-width-1-1 uk-push-1-1 uk-width-2-3@s">

	    	<div class="uk-card-small uk-card-default uk-card-body">

				<p>Bandcamp: <a class="uk-link-muted" href="https://tristanzaba.bandcamp.com/album/mosaic-suite" target="_blank">mosaic-suite</a></p>

		    	<p class="uk-text-medium">“Composer, Musician, Doer of Everything”
		    		</br><em class="uk-text-meta"> - Sarah Jo Kirsch, CKUW</em> 
	    		</p>
				<p class="uk-text-medium">“Takes the listener on a journey through the depths of the human mind and back”
					</br><em class="uk-text-meta"> - Doug Kretchmer, Community News Commons</em> 
				</p>
				<p class="uk-text-medium">“Being Zaba there is always an edge of some kind”
					</br><em class="uk-text-meta"> - Mark Anthony Brennan, Ride the Tempo</em> 
				</p>
			</div>
    	</div>

		<div class="uk-width-1-1 uk-width-1-3@s">
			<a class="uk-link-muted" href="https://tristanzaba.bandcamp.com/album/mosaic-suite" target="_blank"><img class="" src="images/mosaic_suite_cover.jpg" alt="Example image"></a>
		</div>

    	

 
	</div>

<?php
echo file_get_contents( "mainPhp/main_layout_bottom.php" ); 
?>
