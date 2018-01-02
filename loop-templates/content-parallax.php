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
        <?
	
			// check if this has a repeater field
			if( have_rows('content_area') ):

				while( have_rows('content_area') ): the_row(); 
				
					// vars
					$image = get_sub_field('image');
					$section_heading = get_sub_field('section_heading');
					$content = get_sub_field('text_content');
						
				?>
				<section id="<?php echo $section_heading; ?>" class="slide" data-type="background" data-speed="0">
						<div class="container">
                        	<?php if(get_sub_field('section_heading')): ?>
								<h1><?php echo $section_heading; ?></h1>
                            <? endif; ?>
								<div class="row">
									<?php 
									
									while ( have_rows('section_content') ) : the_row();

										if( get_row_layout() == 'single_column' ):
									
												the_sub_field('column_one');
									
										elseif( get_row_layout() == 'two_column' ): 
									?>
										<div class="col-md-6"><?php echo the_sub_field('column_one'); ?></div>
                                        <div class="col-md-6"><?php echo the_sub_field('column_two'); ?></div>
									<?php		
										elseif( get_row_layout() == 'three_column' ): 
									?>
										<div class="col-md-4"><?php echo the_sub_field('column_one'); ?></div>
                                        <div class="col-md-4"><?php echo the_sub_field('column_two'); ?></div>
                                        <div class="col-md-4"><?php echo the_sub_field('column_three'); ?></div>
									<?php	
										elseif( get_row_layout() == 'four_column' ): 
									?>
										<div class="col-md-4"><?php echo the_sub_field('column_one'); ?></div>
                                        <div class="col-md-4"><?php echo the_sub_field('column_two'); ?></div>
                                        <div class="col-md-4"><?php echo the_sub_field('column_three'); ?></div>
                                        <div class="col-md-4"><?php echo the_sub_field('column_four'); ?></div>
									<?php
										endif;
								
									endwhile; ?>
                                    
                               </div>	
							</div>

			   </section>
			   <div class="parallax-window parallax-container" data-parallax="scroll" data-image-src="<?php echo $image; ?>"></div>
	
<?php endwhile;
			
			else :
			
				the_content(); 

			endif;
	?>
        