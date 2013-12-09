<?php

/**
 * @file
 * Custom theme implementation to display a carousel.
 */

?>
<?php if ($content): ?>
	<div class="vslider">
		<div id="myCarousel" class="carousel slide vertical">
			<div id="carousel" class="carousel slide">

				<!-- Carousel items -->
				<div class="carousel-inner">
					<?php print $content ?>
				</div>

				<!-- Carousel nav -->
				<a class="carousel-control rotate90 bottom" href="#myCarousel" data-slide="prev">‹</a>
				<a class="carousel-control rotate90 bottom second" href="#myCarousel" data-slide="next">›</a>
			</div>
		</div>
	</div>
<?php endif ?>
