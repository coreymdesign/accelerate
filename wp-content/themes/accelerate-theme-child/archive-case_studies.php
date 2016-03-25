<?php
/**
 * The template for displaying the case studies archive page
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
				$services = get_field('services');
				$client = get_field('client');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');
				$size = "full";
			 ?>
			<article class="case-study">
				<aside class="case-study-sidebar">
					<h2><?php the_title(); ?></h2>
					<h5><?php echo $services; ?></h5>
					<p><?php echo the_casestudies_excerpt(); ?></p>
					<p><strong><a href="<?php the_permalink(); ?>">View Project &gt;</a></strong></p>
					
				</aside>
				<div class="case-study-images archives">
					<a href="<?php the_permalink(); ?>">
					<?php if($image_1){ ?>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
						<?php } ?>
					</a>

				</div>
				
			</article>
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>