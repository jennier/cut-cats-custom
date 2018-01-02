<?php
/**
 * The template for displaying 404 pages (not found).
 */

get_header();
?>
<div class="wrapper" id="404-wrapper">
	<div class="parallax-window parallax-container" data-parallax="scroll" data-image-src="http://cutcatscourier.com/wp-content/uploads/2017/07/11.png"></div>
	<div class="container" id="content">

		<div class="row">

			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">
				
	
					<section class="error-404 not-found">

						<header class="page-header">

							<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.',
							'understrap' ); ?></h1>

						</header><!-- .page-header -->

						<div class="page-content">

							<p><?php esc_html_e( 'It looks like nothing was found at this location.',
							'understrap' ); ?></p>

						</div><!-- .page-content -->

					</section><!-- .error-404 -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div> <!-- .row -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
