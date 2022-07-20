<?php
/*
 * Template Name: About Page
 */ ?>

<?php get_header(); ?>

<!-- ----- Masthead -->
<div id="primary" class="about-page hero-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
            <h3 class="hero-content">Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->
<!-- ----- Services -->
<section class="services">
	<div class="site-content">
		<div class="services-intro">
			<h4> Our Services </h4>
			<p>We take pride in our clients and content we create for them. <br/> Here's a brief overview of our offered services.</p>
		</div>
		<ul class="aboutpage-services">
		<!-- ----- custom query to display 4 of the Services Custom Post Type -->
		<?php query_posts('posts_per_page=4&post_type=services'); ?>
		<!-- loop over the post to display data -->
			<?php while ( have_posts() ) : the_post();
				$text = get_field('text'); 
				$image = get_field('image');
				?>
					<li class="individual-service">
						<?php if($image) { ?>
							<!-- This image call for styling the image element -->
							<img src="<?php echo $image; ?>" />
						<?php } ?>
						<div class="">
							<h2><?php the_title(); ?></h2>
							<p><?php echo $text; ?></p>
						</div>		
					</li>
			<?php endwhile; ?> <!-- end of the loop -->
		<?php wp_reset_query(); ?> <!-- resets the altered query back to the original -->
		</ul>
		<div class = "about-contact">
			<h2> Interested in working with us?</h2>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
	</div>
</section>

<?php get_footer(); ?>
		