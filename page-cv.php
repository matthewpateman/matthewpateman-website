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

<div id="content">
	<div class="wrapper first">




				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>

<h1>Experience</h1>
<?php $category = "work"; ?> 
<?php include(locate_template('content-experience.php')); ?>

<h1>Education</h1>
<?php $category = "education"; ?> 
<?php include(locate_template('content-experience.php')); ?>


				<?php endwhile; // end of the loop. ?>


	</div><!-- .wrapper -->
</div><!-- #content -->

<?php get_footer(); ?>
