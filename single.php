<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="wrapper">
	<div id="content">
		<div class="inner">
		<?php 
			//Get the Thumbnail URL
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array(320,240), false, '' );
			if ($src) { 
		?>

			<div class="image"  style="background: url('<?php echo $src[0] ?>') top left; background-size:100%;"></div>

			<?php } else { ?>

			<div class="image" ></div>

			<?php } ?>
			<div class="text">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					
				<?php endwhile; // end of the loop. ?>
			</div><!-- .text -->
		</div><!-- .inner -->
	</div><!-- #content -->
</div><!-- .wrapper -->

<?php get_footer(); ?>