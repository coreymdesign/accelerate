<?php
/**
 * Template Name: About
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section class="about-page">
				<div class="site-content">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class='aboutpage-hero'>
							<?php the_content(); ?>
							
						</div>
					<?php endwhile; // end of the loop. ?>
				</div><!-- .container -->
			</section><!-- .home-page -->
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="our-services">
				<h5>Our Services</h5>
				<p>We take pride in our clients and the content we create for them. Here is a brief overview of our offered services.</p>
			</div>
			<div class="features-section">
			<?php query_posts('post_type=features'); ?>
			<?php while ( have_posts() ) : the_post(); 
				$image = get_field('image');
				$size = "full";
			?>
			<div class="features">
				<div class="features-sidebar">
					<h2><?php the_title(); ?></h2>
             		<?php the_content(); ?>
             	</div>
             	<div class="features-image">
             		<?php if($image){ ?>
						<?php echo wp_get_attachment_image($image, $size); ?>
					<?php } ?>
				</div>
			</div>
			<?php endwhile; // end of the loop. ?>
		</div>
			<div class="features-cta">
				<h2>Interested in working with us?</h2>
				<a class="button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
			</div>
		</div><!-- #content -->

	</div><!-- #primary -->
			
<?php get_footer(); ?>