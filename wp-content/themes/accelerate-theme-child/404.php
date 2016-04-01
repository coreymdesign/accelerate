<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<div class="page-content">
				<div class="four-oh-four">
					<div class="four-oh-four-image">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/desk_flip.jpg" alt="Flip the Table">
				</div>
						<div class="four-oh-four-text">
							<h2>404! Look what you did! You broke the everything!</h2>
							<p>You've requested a page that is either misspelled, has moved, no longer exists, never had existed, was eaten by a grue, killed with fire or was the result of you bashing your head on the keyboard.</p>
							<p><strong>PRO TIP:</strong> Using the navigation bar above will take you to a page that does exist! Either that, or bash your head on the keyboard some more, and you'll eventually get the right page. Or end up somehow writing the complete works of Shakespeare.</p>
					</div>
				</div>
			</div><!-- .page-content -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
