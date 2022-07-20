<?php
/**
 * The template for displaying the homepage
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="home-page hero-content">
	<div class="main-content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<a class="button" href="<?php echo site_url('/case-studies/') ?>">View Our Work</a>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .main-content -->
</div><!-- #primary -->

<!-- Featured Work -->
<section class="featured-work">
	<div class = "site-content">
		<h4> Featured Work </h4>
		<ul class="homepage-featured-work">
		<!-- query for the posts -->
		<?php query_posts('posts_per_page=3&post_type=case_studies&order=ASC'); ?>
		<!-- loop over the post to display data -->
			<?php while ( have_posts() ) : the_post();
				$image_1 = get_field('image_1');
				$size = 'medium';
			?>
			<li class="individual-featured-work">
				<a href="<?php the_permalink(); ?>">
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>
					<h3><?php the_title(); ?></h3>
				</a>
			</li>
			
			<?php endwhile; ?> <!-- end of the loop -->
		<?php wp_reset_query(); ?> <!-- resets the altered query back to the original -->
		</ul>	
	</div>
</section>

<div class="recent-items-flex-container">

	<!-- Recent Blog Post -->
	<section class="recent-posts">
		<div class = "site-content">
			<div class = "blog-post">
				<h4> From the Blog </h4>
				<!-- query for the posts -->
				<?php query_posts('posts_per_page=1'); ?>
				<!-- loop over the post to display data -->
					<?php while ( have_posts() ) : the_post(); ?>
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
					<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</section>

	<!-- Recent Tweet -->
	<section class = "recent-tweet">
		<div class = "site-content">
			<div class = "tweet">
<!-- When Twitter configured, use code below -->
				<!-- <h4>Recent Tweet</h4> -->
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				<div id="secondary" class="widget-area" role="complementary">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				</div>
				<?php endif; ?>
<!-- When Twitter configured, use code below -->
				<!-- <div class="read-more-link"> -->
					<!-- <a href="<?php /* echo home_url(); */ ?>//twitter.com/WITWomen"> -->
						<!-- <span>Follow Us</span> &rsaquo;  -->
					<!-- </a> -->
				<!-- </div> -->
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
