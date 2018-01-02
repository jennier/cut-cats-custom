<?php
/**
 * Partial template for content in page.php
 */

?>
	
    	  	<section id="header" class="slide parallax-container" data-parallax="scroll" data-type="background" data-speed="0" data-image-src="<?php the_field('header_image'); ?>">
                <div class="container main-container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                        <h1 class="transform front"><?php the_field('page_header'); ?></h1>
                        <h5><?php the_field('header_text'); ?></h5>
                        </div>
                    </div>
                </div>
    		</section>
   <?php

				the_content(); 

	?>
        