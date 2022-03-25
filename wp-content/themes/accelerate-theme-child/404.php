<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header">
				<h1 class="page-title"><a href = "http://localhost:8888/203-accelerate/"><img src="http://localhost:8888/203-accelerate/wp-content/uploads/2022/03/accelerate-404.jpg" alt="This page is not found."/></a></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2 class="not-found"><?php _e( '', 'acceleratemarketing' ); ?>404s happen but Accelerate's your pit crew. <br/>
                     <a href="http://localhost:8888/203-accelerate/" class="not-found"><span class="not-found">Let's get back on track!</span></a></h2>
					<!-- <p><?php //_e( 'It looks like nothing was found at this location. Maybe try a search?', 'acceleratemarketing' ); ?></p>

					<?php //get_search_form(); ?> -->
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
