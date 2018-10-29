<?php
echo file_get_contents( "mainPhp/main_layout_top.php" ); 
?>

	<h1 class="uk-heading-primary">Home</h1>

	<div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s uk-text-center uk-margin-large-top uk-margin-medium-bottom" uk-grid>

		<div>
			<a href="bio.php">
			<div class="uk-margin uk-card uk-card-default uk-card-body uk-height-small uk-background-cover uk-background-top-right" 
			style="background-image: url(images/nav-bio.jpg);">
		    <div class="uk-overlay uk-overlay-default uk-position-bottom">
                <p>Bio</p>
            </div>
		</div></a>
	</div>

		<div>
			<a href="musical-works.php">
			<div class="uk-margin uk-card uk-card-default uk-card-body uk-height-small uk-background-cover" 
			style="background-image: url(images/nav-works.jpg);">
		    <div class="uk-overlay uk-overlay-default uk-position-bottom">
                <p>Works</p>
            </div>
			</div></a>
	</div>

		<div>
			<a href="news-events.php">
			<div class="uk-margin uk-card uk-card-default uk-card-body uk-height-small uk-background-cover" 
			style="background-image: url(images/nav-news.jpg);">
		    <div class="uk-overlay uk-overlay-default uk-position-bottom">
                <p>News</p>
            </div>
			</div></a>
	</div>

		<div>
			<a href="contact.php">
			<div class="uk-margin uk-card uk-card-default uk-card-body uk-height-small uk-background-cover" 
			style="background-image: url(images/nav-contact.jpg);">
		    <div class="uk-overlay uk-overlay-default uk-position-bottom">
                <p>Contact</p>
            </div>
			</div></a>
	</div>

    </div>

	<div uk-grid>

		<div class="uk-width-1-1 uk-push-1-1 uk-width-2-3@s">

	    	<!-- <div class="uk-card-small uk-card-default uk-card-body"> -->

		    	<p class="uk-text-medium">“Composer, Musician, Doer of Everything”
		    		</br><em class="uk-text-meta"> - Sarah Jo Kirsch, CKUW</em> 
	    		</p>
				<p class="uk-text-medium">“Takes the listener on a journey through the depths of the human mind and back”
					</br><em class="uk-text-meta"> - Doug Kretchmer, Community News Commons</em> 
				</p>
				<p class="uk-text-medium">“Being Zaba there is always an edge of some kind”
					</br><em class="uk-text-meta"> - Mark Anthony Brennan, Ride the Tempo</em> 
				</p>

			<!-- </div> -->
			
    	</div>

		<!-- <div class="uk-width-1-1 uk-width-1-3@s">
			<img class="" src="images/zaba-flute.jpg">
		</div> -->
 
	</div>

<?php
echo file_get_contents( "mainPhp/main_layout_bottom.php" ); 
?>
