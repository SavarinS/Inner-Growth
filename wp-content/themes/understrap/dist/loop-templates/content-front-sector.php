<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>



<!-- Private and Business button section -->
	<div class="row">
		<!-- for private sector -->
		<div class="col-lg">
      			<div class="card-body private">
					<div class="title-offer">
						<h1 class="text-center"><a href="<?php the_permalink( 128 ); ?>
"> Private</a></h1>
					</div>
				</div>
		</div><!-- .private col-sm -->

			<!-- for business sector -->
		<div class="col-lg">
    		
      			<div class="card-body business">
					
					<div class="title-offer">
						<h1 class="text-center"><a href="<?php the_permalink( 128 );?> "> Business</a></h1>
					</div>
				</div>
			
		</div><!-- .business col-sm -->

		
				
	</div><!-- .row -->
				


			