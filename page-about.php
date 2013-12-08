<?php
/**
 * Template Name: About
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


<h1>Education</h1>
<?php
$args=array(
  'post_type' => 'experience',
  'post_status' => 'publish',
  'category_name' => 'education',
  'posts_per_page' => -1,
  'order' => ASC,
  
);
$my_query = null;
$my_query = new WP_Query($args );
if( $my_query->have_posts() ) {
  while ($my_query->have_posts()) : $my_query->the_post();

 ?>
<p><?php the_title(); ?></p>

<?php

  endwhile;
}
wp_reset_query();  // Restore global post data stomped by the_post().
?>

			</div><!-- .text -->
		</div><!-- .inner -->
	</div><!-- #content -->
</div><!-- .wrapper -->

<?php get_footer(); ?>