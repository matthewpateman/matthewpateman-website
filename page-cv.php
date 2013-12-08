<?php
/**
 * Template Name: CV
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="wrapper">
	<div id="content">
		<div class="inner">


			



			<div class="text">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- .text -->
		</div><!-- .inner -->
	</div><!-- #content -->
</div><!-- .wrapper -->

<?php get_footer(); ?>
